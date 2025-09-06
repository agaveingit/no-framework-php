<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use NasgorApp\NasiGoreng;
use FastRoute\RouteCollector;
use Middlewares\FastRoute;
use Middlewares\RequestHandler;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Relay\Relay;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequestFactory;
use function DI\create;
use function DI\get;
use function FastRoute\simpleDispatcher;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAttributes(false);
$containerBuilder->addDefinitions([
    NasiGoreng::class => create(NasiGoreng::class)->constructor(get('Koki'), get('Response')),
    'Koki' => 'Koki Rahasia',
    'Response' => function () {
        return new Response();
    }
]);

$container = $containerBuilder->build();

$routes = simpleDispatcher(function (RouteCollector $r) {
    $r->get('/resep', NasiGoreng::class);
    $r->get('/', function () {
        $response = new Response();
        $response->getBody()->write('<h1>Selamat Datang di Warung Nasgor!</h1><p><a href="/resep">Lihat Resep</a></p>');
        return $response;
    });
});

$middlewareQeueu = [
    new FastRoute($routes),
    new RequestHandler($container),
];

$requestHandler = new Relay($middlewareQeueu);
$response = $requestHandler->handle(ServerRequestFactory::fromGlobals());

$emitter = new SapiEmitter();
return $emitter->emit(($response));

// $nasgor = $container->get(NasiGoreng::class);
// $nasgor->__invoke();
