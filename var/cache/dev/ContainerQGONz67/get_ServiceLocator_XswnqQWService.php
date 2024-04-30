<?php

namespace ContainerQGONz67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XswnqQWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XswnqQW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XswnqQW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommandeController::delete' => ['privates', '.service_locator.GZ8iKbh', 'get_ServiceLocator_GZ8iKbhService', true],
            'App\\Controller\\CommandeController::edit' => ['privates', '.service_locator.GZ8iKbh', 'get_ServiceLocator_GZ8iKbhService', true],
            'App\\Controller\\CommandeController::generateCommandePdf' => ['privates', '.service_locator.ttJxBw.', 'get_ServiceLocator_TtJxBw_Service', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.qgJXkGh', 'get_ServiceLocator_QgJXkGhService', true],
            'App\\Controller\\CommandeController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CommandeController::show' => ['privates', '.service_locator.ttJxBw.', 'get_ServiceLocator_TtJxBw_Service', true],
            'App\\Controller\\CommandeController::statistics' => ['privates', '.service_locator.H2oo9Vd', 'get_ServiceLocator_H2oo9VdService', true],
            'App\\Controller\\PlatController::delete' => ['privates', '.service_locator.VQtysSJ', 'get_ServiceLocator_VQtysSJService', true],
            'App\\Controller\\PlatController::edit' => ['privates', '.service_locator.VQtysSJ', 'get_ServiceLocator_VQtysSJService', true],
            'App\\Controller\\PlatController::index' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PlatController::show' => ['privates', '.service_locator.VLAmfmc', 'get_ServiceLocator_VLAmfmcService', true],
            'App\\Controller\\RestaurantCategoryController::delete' => ['privates', '.service_locator.DN2cqWN', 'get_ServiceLocator_DN2cqWNService', true],
            'App\\Controller\\RestaurantCategoryController::edit' => ['privates', '.service_locator.DN2cqWN', 'get_ServiceLocator_DN2cqWNService', true],
            'App\\Controller\\RestaurantCategoryController::index' => ['privates', '.service_locator.sH7lAPV', 'get_ServiceLocator_SH7lAPVService', true],
            'App\\Controller\\RestaurantCategoryController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RestaurantCategoryController::show' => ['privates', '.service_locator._Rc1vP2', 'get_ServiceLocator_Rc1vP2Service', true],
            'App\\Controller\\RestaurantController::delete' => ['privates', '.service_locator.Hc8H.Su', 'get_ServiceLocator_Hc8H_SuService', true],
            'App\\Controller\\RestaurantController::edit' => ['privates', '.service_locator.Hc8H.Su', 'get_ServiceLocator_Hc8H_SuService', true],
            'App\\Controller\\RestaurantController::index' => ['privates', '.service_locator.BWa68rC', 'get_ServiceLocator_BWa68rCService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CommandeController:delete' => ['privates', '.service_locator.GZ8iKbh', 'get_ServiceLocator_GZ8iKbhService', true],
            'App\\Controller\\CommandeController:edit' => ['privates', '.service_locator.GZ8iKbh', 'get_ServiceLocator_GZ8iKbhService', true],
            'App\\Controller\\CommandeController:generateCommandePdf' => ['privates', '.service_locator.ttJxBw.', 'get_ServiceLocator_TtJxBw_Service', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.qgJXkGh', 'get_ServiceLocator_QgJXkGhService', true],
            'App\\Controller\\CommandeController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CommandeController:show' => ['privates', '.service_locator.ttJxBw.', 'get_ServiceLocator_TtJxBw_Service', true],
            'App\\Controller\\CommandeController:statistics' => ['privates', '.service_locator.H2oo9Vd', 'get_ServiceLocator_H2oo9VdService', true],
            'App\\Controller\\PlatController:delete' => ['privates', '.service_locator.VQtysSJ', 'get_ServiceLocator_VQtysSJService', true],
            'App\\Controller\\PlatController:edit' => ['privates', '.service_locator.VQtysSJ', 'get_ServiceLocator_VQtysSJService', true],
            'App\\Controller\\PlatController:index' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PlatController:show' => ['privates', '.service_locator.VLAmfmc', 'get_ServiceLocator_VLAmfmcService', true],
            'App\\Controller\\RestaurantCategoryController:delete' => ['privates', '.service_locator.DN2cqWN', 'get_ServiceLocator_DN2cqWNService', true],
            'App\\Controller\\RestaurantCategoryController:edit' => ['privates', '.service_locator.DN2cqWN', 'get_ServiceLocator_DN2cqWNService', true],
            'App\\Controller\\RestaurantCategoryController:index' => ['privates', '.service_locator.sH7lAPV', 'get_ServiceLocator_SH7lAPVService', true],
            'App\\Controller\\RestaurantCategoryController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RestaurantCategoryController:show' => ['privates', '.service_locator._Rc1vP2', 'get_ServiceLocator_Rc1vP2Service', true],
            'App\\Controller\\RestaurantController:delete' => ['privates', '.service_locator.Hc8H.Su', 'get_ServiceLocator_Hc8H_SuService', true],
            'App\\Controller\\RestaurantController:edit' => ['privates', '.service_locator.Hc8H.Su', 'get_ServiceLocator_Hc8H_SuService', true],
            'App\\Controller\\RestaurantController:index' => ['privates', '.service_locator.BWa68rC', 'get_ServiceLocator_BWa68rCService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CommandeController::delete' => '?',
            'App\\Controller\\CommandeController::edit' => '?',
            'App\\Controller\\CommandeController::generateCommandePdf' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::new' => '?',
            'App\\Controller\\CommandeController::show' => '?',
            'App\\Controller\\CommandeController::statistics' => '?',
            'App\\Controller\\PlatController::delete' => '?',
            'App\\Controller\\PlatController::edit' => '?',
            'App\\Controller\\PlatController::index' => '?',
            'App\\Controller\\PlatController::new' => '?',
            'App\\Controller\\PlatController::show' => '?',
            'App\\Controller\\RestaurantCategoryController::delete' => '?',
            'App\\Controller\\RestaurantCategoryController::edit' => '?',
            'App\\Controller\\RestaurantCategoryController::index' => '?',
            'App\\Controller\\RestaurantCategoryController::new' => '?',
            'App\\Controller\\RestaurantCategoryController::show' => '?',
            'App\\Controller\\RestaurantController::delete' => '?',
            'App\\Controller\\RestaurantController::edit' => '?',
            'App\\Controller\\RestaurantController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CommandeController:delete' => '?',
            'App\\Controller\\CommandeController:edit' => '?',
            'App\\Controller\\CommandeController:generateCommandePdf' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:new' => '?',
            'App\\Controller\\CommandeController:show' => '?',
            'App\\Controller\\CommandeController:statistics' => '?',
            'App\\Controller\\PlatController:delete' => '?',
            'App\\Controller\\PlatController:edit' => '?',
            'App\\Controller\\PlatController:index' => '?',
            'App\\Controller\\PlatController:new' => '?',
            'App\\Controller\\PlatController:show' => '?',
            'App\\Controller\\RestaurantCategoryController:delete' => '?',
            'App\\Controller\\RestaurantCategoryController:edit' => '?',
            'App\\Controller\\RestaurantCategoryController:index' => '?',
            'App\\Controller\\RestaurantCategoryController:new' => '?',
            'App\\Controller\\RestaurantCategoryController:show' => '?',
            'App\\Controller\\RestaurantController:delete' => '?',
            'App\\Controller\\RestaurantController:edit' => '?',
            'App\\Controller\\RestaurantController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
