<?php

namespace ContainerMXbF3vo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParticipationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ParticipationController' shared autowired service.
     *
     * @return \App\Controller\ParticipationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ParticipationController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SmsSender.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'TransportInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'TexterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Texter.php';

        $container->services['App\\Controller\\ParticipationController'] = $instance = new \App\Controller\ParticipationController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), new \App\Service\SmsSender(new \Symfony\Component\Notifier\Texter(($container->privates['texter.transports'] ?? $container->load('getTexter_TransportsService')), ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()))));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ParticipationController', $container));

        return $instance;
    }
}
