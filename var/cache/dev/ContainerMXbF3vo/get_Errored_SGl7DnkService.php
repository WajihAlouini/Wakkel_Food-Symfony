<?php

namespace ContainerMXbF3vo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_SGl7DnkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.sGl7Dnk' shared service.
     *
     * @return \App\Repository\EvenementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\EvenementController::showfront()": the $evenementRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\EvenementRepository".');
    }
}
