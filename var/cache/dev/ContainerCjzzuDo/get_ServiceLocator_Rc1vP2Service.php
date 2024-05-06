<?php

namespace ContainerCjzzuDo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rc1vP2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._Rc1vP2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._Rc1vP2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'restaurantCategory' => ['privates', '.errored..service_locator._Rc1vP2.App\\Entity\\RestaurantCategory', NULL, 'Cannot autowire service ".service_locator._Rc1vP2": it references class "App\\Entity\\RestaurantCategory" but no such service exists.'],
        ], [
            'restaurantCategory' => 'App\\Entity\\RestaurantCategory',
        ]);
    }
}