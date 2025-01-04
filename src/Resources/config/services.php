<?php

declare(strict_types=1);

namespace  Abdellahramadan\SchemaOrgBundle\Resources\config;
use Abdellahramadan\SchemaOrgBundle\Schema\Schema;
use Abdellahramadan\SchemaOrgBundle\Schema\SchemaInterface;
use Abdellahramadan\SchemaOrgBundle\Service\RandomNumber;
use Abdellahramadan\SchemaOrgBundle\Service\RandomNumberInterface;
use Abdellahramadan\SchemaOrgBundle\Twig\Extensions\SchemaOrgExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void
{
    $services = $container->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
    ;

    $services->set(RandomNumber::class, RandomNumber::class)->autowire();
    $services->set(Schema::class, Schema::class)->autowire();
    $services->alias(SchemaInterface::class, Schema::class);
    $services->alias(RandomNumberInterface::class, RandomNumber::class);
    $services->set(SchemaOrgExtension::class, SchemaOrgExtension::class)
        ->autowire()
        ->tag('twig.extension')
    ;

};