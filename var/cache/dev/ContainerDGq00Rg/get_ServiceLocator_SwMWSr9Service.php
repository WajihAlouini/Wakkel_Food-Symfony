<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SwMWSr9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SwMWSr9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SwMWSr9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'platRepository' => ['privates', 'App\\Repository\\PlatRepository', 'getPlatRepositoryService', true],
            'restaurantRepository' => ['privates', 'App\\Repository\\RestaurantRepository', 'getRestaurantRepositoryService', true],
        ], [
            'paginator' => '?',
            'platRepository' => 'App\\Repository\\PlatRepository',
            'restaurantRepository' => 'App\\Repository\\RestaurantRepository',
        ]);
    }
}