<?php

namespace ContainerIesygSF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HlgA1guService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hlgA1gu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hlgA1gu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenement' => ['privates', '.errored..service_locator.hlgA1gu.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.hlgA1gu": it references class "App\\Entity\\Evenement" but no such service exists.'],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
