<?php

declare(strict_types=1);

use Rector\Autodiscovery\Rector\Class_\MoveServicesBySuffixToDirectoryRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(MoveServicesBySuffixToDirectoryRector::class)
        ->call('configure', [[
            MoveServicesBySuffixToDirectoryRector::GROUP_NAMES_BY_SUFFIX => [
                'Repository',
                'Command',
                'Mapper',
                'Controller',
            ],
        ]]);
};
