<?php


require_once __DIR__ . "/vendor/autoload.php";

$app = new \Slim\Slim();

new \JLaso\SlimRoutingManager\RoutingCacheManager(
    array(
        'cache'      => __DIR__ . '/cache/routing',
        'controller' => __DIR__ . '/app/controller',
    )
);

$app->hook(
    'slim.after',
    function() use ($app){
        $body = $app->response()->body();
        $body = str_replace('%ROOT%', 'sampleRouting', $body);
        $app->response()->body($body);
    }
);

$app->run();