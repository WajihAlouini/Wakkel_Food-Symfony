<?php

namespace ContainerIesygSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hc8H_SuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hc8H.Su' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hc8H.Su'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'restaurant' => ['privates', '.errored..service_locator.Hc8H.Su.App\\Entity\\Restaurant', NULL, 'Cannot autowire service ".service_locator.Hc8H.Su": it references class "App\\Entity\\Restaurant" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'restaurant' => 'App\\Entity\\Restaurant',
        ]);
    }
}
