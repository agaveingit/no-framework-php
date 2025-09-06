<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use NasgorApp\NasiGoreng;
use function DI\create;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAttributes(false);
$containerBuilder->addDefinitions([
    \NasgorApp\NasiGoreng::class => \DI\create(\NasgorApp\NasiGoreng::class)
]);

$container = $containerBuilder->build();

$nasgor = new \NasgorApp\NasiGoreng();
$nasgor->resep();
