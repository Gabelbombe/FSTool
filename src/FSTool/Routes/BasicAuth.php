<?php
$authenticate = function ($app)
{
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
    '/login'    => 'BasicAuth:login',
    '/logout'   => 'BasicAuth:logout',

    '/'         => [
        'BasicAuth:index', [ $authenticate($app) ]
    ],
]);