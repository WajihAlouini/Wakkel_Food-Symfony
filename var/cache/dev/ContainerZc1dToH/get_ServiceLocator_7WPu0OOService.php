<?php

namespace ContainerZc1dToH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7WPu0OOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7WPu0OO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7WPu0OO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController::frontindex' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.yAvMNdP', 'get_ServiceLocator_YAvMNdPService', true],
            'App\\Controller\\EvenementController::showfront' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\ParticipationController::delete' => ['privates', '.service_locator.nIEOpo9', 'get_ServiceLocator_NIEOpo9Service', true],
            'App\\Controller\\ParticipationController::edit' => ['privates', '.service_locator.nIEOpo9', 'get_ServiceLocator_NIEOpo9Service', true],
            'App\\Controller\\ParticipationController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipationController::show' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.wXSRjZL', 'get_ServiceLocator_WXSRjZLService', true],
            'App\\Controller\\EvenementController:frontindex' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.yAvMNdP', 'get_ServiceLocator_YAvMNdPService', true],
            'App\\Controller\\EvenementController:showfront' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\ParticipationController:delete' => ['privates', '.service_locator.nIEOpo9', 'get_ServiceLocator_NIEOpo9Service', true],
            'App\\Controller\\ParticipationController:edit' => ['privates', '.service_locator.nIEOpo9', 'get_ServiceLocator_NIEOpo9Service', true],
            'App\\Controller\\ParticipationController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ParticipationController:show' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::frontindex' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\EvenementController::showfront' => '?',
            'App\\Controller\\ParticipationController::delete' => '?',
            'App\\Controller\\ParticipationController::edit' => '?',
            'App\\Controller\\ParticipationController::index' => '?',
            'App\\Controller\\ParticipationController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:frontindex' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\EvenementController:showfront' => '?',
            'App\\Controller\\ParticipationController:delete' => '?',
            'App\\Controller\\ParticipationController:edit' => '?',
            'App\\Controller\\ParticipationController:index' => '?',
            'App\\Controller\\ParticipationController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
