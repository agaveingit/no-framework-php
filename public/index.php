<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use NasgorApp\NasiGoreng;
use FastRoute\RouteCollector;
use Middlewares\FastRoute;
use Middlewares\RequestHandler;
use Relay\Relay;
use Laminas\Diactoros\ServerRequestFactory;
use function DI\create;
use function FastRoute\simpleDispatcher;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAttributes(false);
$containerBuilder->addDefinitions([
    \NasgorApp\NasiGoreng::class => \DI\create(\NasgorApp\NasiGoreng::class)
]);

$container = $containerBuilder->build();

$routes = simpleDispatcher(function (RouteCollector $r) {
    $r->get('resep', NasiGoreng::class);
});

$middlewareQeueu[] = new FastRoute($routes);
$middlewareQeueu[] = new RequestHandler();

$requestHandler = new Relay($middlewareQeueu);
$requestHandler->handle(ServerRequestFactory::fromGlobals());

$nasgor = $container->get(NasiGoreng::class);
$nasgor->__invoke();
