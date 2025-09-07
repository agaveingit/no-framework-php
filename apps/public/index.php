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
    'Koki' => 'Koki Rahasia 👨‍🍳',
    'Response' => function () {
        return new Response();
    }
]);

$container = $containerBuilder->build();

$routes = simpleDispatcher(function (RouteCollector $r) {

    // $r->get('/', function () {
    //     echo "Hello from root route!";
    //     exit;
    // });

    $r->get('/', function () {
        include __DIR__ . '/../resources/views/home.php';
        exit;
    });
    $r->get('/resep', function () {
        include __DIR__ . '/../resources/views/resep.php';
        exit;
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
