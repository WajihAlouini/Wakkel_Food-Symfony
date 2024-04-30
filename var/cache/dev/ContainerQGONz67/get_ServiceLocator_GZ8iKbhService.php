<?php

namespace ContainerQGONz67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GZ8iKbhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GZ8iKbh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GZ8iKbh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commande' => ['privates', '.errored..service_locator.GZ8iKbh.App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.GZ8iKbh": it references class "App\\Entity\\Commande" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commande' => 'App\\Entity\\Commande',
            'entityManager' => '?',
        ]);
    }
}