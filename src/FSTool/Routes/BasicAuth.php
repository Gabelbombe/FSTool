<?php
/**
 * Closure for generic auth handoff to drop user on route /login
 *
 * @param $app
 * @return callable
 */
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

/**
 * Pre-hooking prior to any other route or map takes place...
 */
$app->hook('slim.before.dispatch', function() USE ($app)
{
    $user = null;
    if (isset($_SESSION['user'])) $user = $_SESSION['user'];
    $app->view()->setData('user', $user);
});

/**
 * Generic/Batched routes
 *
 * TODO: SlimController does not differentiate between GET/POST on routes if
 * TODO: the route path is the same, in order to bypass this atm without hacking
 * TODO: up our controller we will use a generic switch method until this is
 * TODO: addressed somewhere down the line.... ~jd
 */
$app->addRoutes([
    '/login'        => 'BasicAuth:delegate',
    '/logout'       => 'BasicAuth:logout',
    '/'             => ['BasicAuth:router', [ $authenticate($app) ]],

    '/apps'         => 'App:index',
    '/apps/add'     => 'App:add',

    '/api'          => 'Api:index',
]);



/**
 * Dynamic GET routes
 *
 * Dynamically find controller, if secondary param (method) does not exist
 * default to `index`. If there is a suffix set for the method type, append.
 * After controller is assembled, dynamically place call and run controller
 * method with parameters after 2 length as values.
 *
 * Example Route: /controller/method/param1/param2
 * Calls -> Controller::methodAction($param2, $param2)
 *
 *
 * ~jd
 */
$app->get('/:controller(/:params+)', $authenticate($app), function($controller) USE ($app)
{
    $config = $app->container->get('settings');
    $class  = '\\FSTool\\Controller\\' . $c = ucfirst(strtolower($controller));
    $args   = func_get_args();

    if (class_exists($class))
    {
        $controller = New $class($app);
        $action     = (2 <=  count($args))
            ? strtolower(array_pop($args) [0])
            : 'index';

        if (isset($config['controller.method_suffix']))

            $action = "{$action}{$config['controller.method_suffix']}";

        if (method_exists($controller, $action) && is_callable([$controller, $action]))
        {
            //callable \Class::{method}Action($args)
            return call_user_func_array([
                $controller,
                $action
            ], $args);
        }
    }

    $app->notFound();
});

//require 'Ajax.php'; //testing