<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gh0oFS6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gh0oFS6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gh0oFS6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurantCategoryRepository' => ['privates', 'App\\Repository\\RestaurantCategoryRepository', 'getRestaurantCategoryRepositoryService', true],
            'restaurantRepository' => ['privates', 'App\\Repository\\RestaurantRepository', 'getRestaurantRepositoryService', true],
        ], [
            'restaurantCategoryRepository' => 'App\\Repository\\RestaurantCategoryRepository',
            'restaurantRepository' => 'App\\Repository\\RestaurantRepository',
        ]);
    }
}