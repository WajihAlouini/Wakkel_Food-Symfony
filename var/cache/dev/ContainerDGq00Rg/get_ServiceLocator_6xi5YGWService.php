<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6xi5YGWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6xi5YGW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6xi5YGW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientController::back' => ['privates', '.service_locator.T1Cqnaw', 'get_ServiceLocator_T1CqnawService', true],
            'App\\Controller\\ClientController::banClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController::confirmEmail' => ['privates', '.service_locator.tzJsoZL', 'get_ServiceLocator_TzJsoZLService', true],
            'App\\Controller\\ClientController::confirmSms' => ['privates', '.service_locator.tzJsoZL', 'get_ServiceLocator_TzJsoZLService', true],
            'App\\Controller\\ClientController::createCompte' => ['privates', '.service_locator.OaqQmZS', 'get_ServiceLocator_OaqQmZSService', true],
            'App\\Controller\\ClientController::deleteClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController::editClient' => ['privates', '.service_locator.tXM58lC', 'get_ServiceLocator_TXM58lCService', true],
            'App\\Controller\\ClientController::editc' => ['privates', '.service_locator.Wn101mG', 'get_ServiceLocator_Wn101mGService', true],
            'App\\Controller\\ClientController::editprivacy' => ['privates', '.service_locator.tXM58lC', 'get_ServiceLocator_TXM58lCService', true],
            'App\\Controller\\ClientController::forgotmdp' => ['privates', '.service_locator.1I1MNFX', 'get_ServiceLocator_1I1MNFXService', true],
            'App\\Controller\\ClientController::front' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController::search' => ['privates', '.service_locator.YYeQTLN', 'get_ServiceLocator_YYeQTLNService', true],
            'App\\Controller\\ClientController::unbanClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController::verifmdp' => ['privates', '.service_locator.dBnDYM8', 'get_ServiceLocator_DBnDYM8Service', true],
            'App\\Controller\\PlatController::delete' => ['privates', '.service_locator.hqLOpID', 'get_ServiceLocator_HqLOpIDService', true],
            'App\\Controller\\PlatController::edit' => ['privates', '.service_locator.B4rRPCY', 'get_ServiceLocator_B4rRPCYService', true],
            'App\\Controller\\PlatController::index' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PlatController::restaurantPlats' => ['privates', '.service_locator.SwMWSr9', 'get_ServiceLocator_SwMWSr9Service', true],
            'App\\Controller\\PlatController::search' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController::show' => ['privates', '.service_locator.wpRls.H', 'get_ServiceLocator_WpRls_HService', true],
            'App\\Controller\\PlatController::triCroissant' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController::triDescroissant' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\RestaurantCategoryController::delete' => ['privates', '.service_locator.ulnNO2U', 'get_ServiceLocator_UlnNO2UService', true],
            'App\\Controller\\RestaurantCategoryController::edit' => ['privates', '.service_locator.M5avfs9', 'get_ServiceLocator_M5avfs9Service', true],
            'App\\Controller\\RestaurantCategoryController::getRestaurants' => ['privates', '.service_locator.BWa68rC', 'get_ServiceLocator_BWa68rCService', true],
            'App\\Controller\\RestaurantCategoryController::index' => ['privates', '.service_locator.sH7lAPV', 'get_ServiceLocator_SH7lAPVService', true],
            'App\\Controller\\RestaurantCategoryController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RestaurantCategoryController::show' => ['privates', '.service_locator.f7QdaPa', 'get_ServiceLocator_F7QdaPaService', true],
            'App\\Controller\\RestaurantController::RestaurantStatistics' => ['privates', '.service_locator.p.sxhMj', 'get_ServiceLocator_P_SxhMjService', true],
            'App\\Controller\\RestaurantController::delete' => ['privates', '.service_locator.kQysXbh', 'get_ServiceLocator_KQysXbhService', true],
            'App\\Controller\\RestaurantController::edit' => ['privates', '.service_locator.eMU599J', 'get_ServiceLocator_EMU599JService', true],
            'App\\Controller\\RestaurantController::index' => ['privates', '.service_locator.gh0oFS6', 'get_ServiceLocator_Gh0oFS6Service', true],
            'App\\Controller\\RestaurantController::restaurantsByCategory' => ['privates', '.service_locator.gh0oFS6', 'get_ServiceLocator_Gh0oFS6Service', true],
            'App\\Controller\\SecurityController::authenticate' => ['privates', '.service_locator.5n4Prsd', 'get_ServiceLocator_5n4PrsdService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ClientController:back' => ['privates', '.service_locator.T1Cqnaw', 'get_ServiceLocator_T1CqnawService', true],
            'App\\Controller\\ClientController:banClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController:confirmEmail' => ['privates', '.service_locator.tzJsoZL', 'get_ServiceLocator_TzJsoZLService', true],
            'App\\Controller\\ClientController:confirmSms' => ['privates', '.service_locator.tzJsoZL', 'get_ServiceLocator_TzJsoZLService', true],
            'App\\Controller\\ClientController:createCompte' => ['privates', '.service_locator.OaqQmZS', 'get_ServiceLocator_OaqQmZSService', true],
            'App\\Controller\\ClientController:deleteClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController:editClient' => ['privates', '.service_locator.tXM58lC', 'get_ServiceLocator_TXM58lCService', true],
            'App\\Controller\\ClientController:editc' => ['privates', '.service_locator.Wn101mG', 'get_ServiceLocator_Wn101mGService', true],
            'App\\Controller\\ClientController:editprivacy' => ['privates', '.service_locator.tXM58lC', 'get_ServiceLocator_TXM58lCService', true],
            'App\\Controller\\ClientController:forgotmdp' => ['privates', '.service_locator.1I1MNFX', 'get_ServiceLocator_1I1MNFXService', true],
            'App\\Controller\\ClientController:front' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController:search' => ['privates', '.service_locator.YYeQTLN', 'get_ServiceLocator_YYeQTLNService', true],
            'App\\Controller\\ClientController:unbanClient' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController:verifmdp' => ['privates', '.service_locator.dBnDYM8', 'get_ServiceLocator_DBnDYM8Service', true],
            'App\\Controller\\PlatController:delete' => ['privates', '.service_locator.hqLOpID', 'get_ServiceLocator_HqLOpIDService', true],
            'App\\Controller\\PlatController:edit' => ['privates', '.service_locator.B4rRPCY', 'get_ServiceLocator_B4rRPCYService', true],
            'App\\Controller\\PlatController:index' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PlatController:restaurantPlats' => ['privates', '.service_locator.SwMWSr9', 'get_ServiceLocator_SwMWSr9Service', true],
            'App\\Controller\\PlatController:search' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController:show' => ['privates', '.service_locator.wpRls.H', 'get_ServiceLocator_WpRls_HService', true],
            'App\\Controller\\PlatController:triCroissant' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\PlatController:triDescroissant' => ['privates', '.service_locator.687CVbR', 'get_ServiceLocator_687CVbRService', true],
            'App\\Controller\\RestaurantCategoryController:delete' => ['privates', '.service_locator.ulnNO2U', 'get_ServiceLocator_UlnNO2UService', true],
            'App\\Controller\\RestaurantCategoryController:edit' => ['privates', '.service_locator.M5avfs9', 'get_ServiceLocator_M5avfs9Service', true],
            'App\\Controller\\RestaurantCategoryController:getRestaurants' => ['privates', '.service_locator.BWa68rC', 'get_ServiceLocator_BWa68rCService', true],
            'App\\Controller\\RestaurantCategoryController:index' => ['privates', '.service_locator.sH7lAPV', 'get_ServiceLocator_SH7lAPVService', true],
            'App\\Controller\\RestaurantCategoryController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RestaurantCategoryController:show' => ['privates', '.service_locator.f7QdaPa', 'get_ServiceLocator_F7QdaPaService', true],
            'App\\Controller\\RestaurantController:RestaurantStatistics' => ['privates', '.service_locator.p.sxhMj', 'get_ServiceLocator_P_SxhMjService', true],
            'App\\Controller\\RestaurantController:delete' => ['privates', '.service_locator.kQysXbh', 'get_ServiceLocator_KQysXbhService', true],
            'App\\Controller\\RestaurantController:edit' => ['privates', '.service_locator.eMU599J', 'get_ServiceLocator_EMU599JService', true],
            'App\\Controller\\RestaurantController:index' => ['privates', '.service_locator.gh0oFS6', 'get_ServiceLocator_Gh0oFS6Service', true],
            'App\\Controller\\RestaurantController:restaurantsByCategory' => ['privates', '.service_locator.gh0oFS6', 'get_ServiceLocator_Gh0oFS6Service', true],
            'App\\Controller\\SecurityController:authenticate' => ['privates', '.service_locator.5n4Prsd', 'get_ServiceLocator_5n4PrsdService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ClientController::back' => '?',
            'App\\Controller\\ClientController::banClient' => '?',
            'App\\Controller\\ClientController::confirmEmail' => '?',
            'App\\Controller\\ClientController::confirmSms' => '?',
            'App\\Controller\\ClientController::createCompte' => '?',
            'App\\Controller\\ClientController::deleteClient' => '?',
            'App\\Controller\\ClientController::editClient' => '?',
            'App\\Controller\\ClientController::editc' => '?',
            'App\\Controller\\ClientController::editprivacy' => '?',
            'App\\Controller\\ClientController::forgotmdp' => '?',
            'App\\Controller\\ClientController::front' => '?',
            'App\\Controller\\ClientController::search' => '?',
            'App\\Controller\\ClientController::unbanClient' => '?',
            'App\\Controller\\ClientController::verifmdp' => '?',
            'App\\Controller\\PlatController::delete' => '?',
            'App\\Controller\\PlatController::edit' => '?',
            'App\\Controller\\PlatController::index' => '?',
            'App\\Controller\\PlatController::new' => '?',
            'App\\Controller\\PlatController::restaurantPlats' => '?',
            'App\\Controller\\PlatController::search' => '?',
            'App\\Controller\\PlatController::show' => '?',
            'App\\Controller\\PlatController::triCroissant' => '?',
            'App\\Controller\\PlatController::triDescroissant' => '?',
            'App\\Controller\\RestaurantCategoryController::delete' => '?',
            'App\\Controller\\RestaurantCategoryController::edit' => '?',
            'App\\Controller\\RestaurantCategoryController::getRestaurants' => '?',
            'App\\Controller\\RestaurantCategoryController::index' => '?',
            'App\\Controller\\RestaurantCategoryController::new' => '?',
            'App\\Controller\\RestaurantCategoryController::show' => '?',
            'App\\Controller\\RestaurantController::RestaurantStatistics' => '?',
            'App\\Controller\\RestaurantController::delete' => '?',
            'App\\Controller\\RestaurantController::edit' => '?',
            'App\\Controller\\RestaurantController::index' => '?',
            'App\\Controller\\RestaurantController::restaurantsByCategory' => '?',
            'App\\Controller\\SecurityController::authenticate' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ClientController:back' => '?',
            'App\\Controller\\ClientController:banClient' => '?',
            'App\\Controller\\ClientController:confirmEmail' => '?',
            'App\\Controller\\ClientController:confirmSms' => '?',
            'App\\Controller\\ClientController:createCompte' => '?',
            'App\\Controller\\ClientController:deleteClient' => '?',
            'App\\Controller\\ClientController:editClient' => '?',
            'App\\Controller\\ClientController:editc' => '?',
            'App\\Controller\\ClientController:editprivacy' => '?',
            'App\\Controller\\ClientController:forgotmdp' => '?',
            'App\\Controller\\ClientController:front' => '?',
            'App\\Controller\\ClientController:search' => '?',
            'App\\Controller\\ClientController:unbanClient' => '?',
            'App\\Controller\\ClientController:verifmdp' => '?',
            'App\\Controller\\PlatController:delete' => '?',
            'App\\Controller\\PlatController:edit' => '?',
            'App\\Controller\\PlatController:index' => '?',
            'App\\Controller\\PlatController:new' => '?',
            'App\\Controller\\PlatController:restaurantPlats' => '?',
            'App\\Controller\\PlatController:search' => '?',
            'App\\Controller\\PlatController:show' => '?',
            'App\\Controller\\PlatController:triCroissant' => '?',
            'App\\Controller\\PlatController:triDescroissant' => '?',
            'App\\Controller\\RestaurantCategoryController:delete' => '?',
            'App\\Controller\\RestaurantCategoryController:edit' => '?',
            'App\\Controller\\RestaurantCategoryController:getRestaurants' => '?',
            'App\\Controller\\RestaurantCategoryController:index' => '?',
            'App\\Controller\\RestaurantCategoryController:new' => '?',
            'App\\Controller\\RestaurantCategoryController:show' => '?',
            'App\\Controller\\RestaurantController:RestaurantStatistics' => '?',
            'App\\Controller\\RestaurantController:delete' => '?',
            'App\\Controller\\RestaurantController:edit' => '?',
            'App\\Controller\\RestaurantController:index' => '?',
            'App\\Controller\\RestaurantController:restaurantsByCategory' => '?',
            'App\\Controller\\SecurityController:authenticate' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
