<?php

namespace ContainerIt0nKVe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PlatType' shared autowired service.
     *
     * @return \App\Form\PlatType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PlatType'] = new \App\Form\PlatType(($container->privates['App\\Repository\\RestaurantRepository'] ?? $container->load('getRestaurantRepositoryService')));
    }
}
