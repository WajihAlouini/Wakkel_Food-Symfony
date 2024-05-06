<?php

namespace ContainerA1YJCn1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RIHaquuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rIHaquu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rIHaquu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pdf' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
            'reclamationRepository' => ['privates', 'App\\Repository\\reclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'pdf' => '?',
            'reclamationRepository' => 'App\\Repository\\reclamationRepository',
        ]);
    }
}