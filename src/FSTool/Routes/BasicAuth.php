<?php

$authenticate = function ($app)
{
    if (! isset($_SESSION)) session_start();

    return function () USE ($app)
    {
        if (! isset($_SESSION['user']))
        {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect('/login');
        }
    };
};


$app->hook('slim.before.dispatch', function() USE ($app)
{
    $user = null;
    if (isset($_SESSION['user'])) $user = $_SESSION['user'];
    $app->view()->setData('user', $user);
});


$app->addRoutes([

    '/login'    => 'BasicAuth:delegate',
    '/logout'   => 'BasicAuth:logout',

    '/'         => [
        'BasicAuth:router', [ $authenticate($app) ]
    ],
]);

$app->get('/:controller(/:params+)', $authenticate($app), function($controller) USE ($app)
{
    $class = '\\FSTool\\Controller\\' . ucfirst(strtolower($controller));
    $args = func_get_args();


die($class);
    if (class_exists($class))
    {
        $controller = New $class($app);
        $action     = strtolower(array_pop($args) [0]);
        $action     = (isset($app->container->get('settings') ['controller.method_suffix']))
            ? $action . $app->container->get('settings') ['controller.method_suffix']
            : $action;

        print_r($action);
        die;

        if (method_exists($controller, $action) && is_callable([$controller, $action]))
        {
            return call_user_func_array([
                $controller, //Class
                $action      //Class::{foo}Action
            ], $args);
        }
    }

echo $class . '::' . $action;

//    $app->notFound();
});