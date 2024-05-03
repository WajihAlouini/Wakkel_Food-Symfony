<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KQysXbhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kQysXbh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kQysXbh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'restaurant' => ['privates', '.errored.ci3wrwi', NULL, 'Cannot determine controller argument for "App\\Controller\\RestaurantController::delete()": the $restaurant argument is type-hinted with the non-existent class or interface: "App\\Entity\\Restaurant".'],
        ], [
            'entityManager' => '?',
            'restaurant' => '?',
        ]);
    }
}
