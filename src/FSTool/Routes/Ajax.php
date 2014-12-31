<?php
$app->post('/:controller(/:params+)', function($controller) USE ($app)
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

    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->status(404);

    $app->response->body(json_encode([
        'error' => "Route: '$controller' not found..."
    ], JSON_PRETTY_PRINT) . "\n");

});
