<?php

namespace ContainerIesygSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DN2cqWNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DN2cqWN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DN2cqWN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'restaurantCategory' => ['privates', '.errored..service_locator.DN2cqWN.App\\Entity\\RestaurantCategory', NULL, 'Cannot autowire service ".service_locator.DN2cqWN": it references class "App\\Entity\\RestaurantCategory" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'restaurantCategory' => 'App\\Entity\\RestaurantCategory',
        ]);
    }
}
