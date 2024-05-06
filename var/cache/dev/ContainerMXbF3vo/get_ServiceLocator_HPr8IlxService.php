<?php

namespace ContainerMXbF3vo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HPr8IlxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hPr8Ilx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hPr8Ilx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenement' => ['privates', '.errored..service_locator.hPr8Ilx.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.hPr8Ilx": it references class "App\\Entity\\Evenement" but no such service exists.'],
            'evenementRepository' => ['privates', '.errored.sGl7Dnk', NULL, 'Cannot determine controller argument for "App\\Controller\\EvenementController::showfront()": the $evenementRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\EvenementRepository".'],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
            'evenementRepository' => '?',
        ]);
    }
}