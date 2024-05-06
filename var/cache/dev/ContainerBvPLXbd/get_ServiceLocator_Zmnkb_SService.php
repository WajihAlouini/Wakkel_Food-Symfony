<?php

namespace ContainerBvPLXbd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zmnkb_SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zmnkb.S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zmnkb.S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'evaluation' => ['privates', '.errored..service_locator.zmnkb.S.App\\Entity\\Evaluation', NULL, 'Cannot autowire service ".service_locator.zmnkb.S": it references class "App\\Entity\\Evaluation" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'evaluation' => 'App\\Entity\\Evaluation',
        ]);
    }
}
