<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVictorPrdh_RecaptchaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'victor_prdh.recaptcha' shared service.
     *
     * @return \ReCaptcha\ReCaptcha
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'ReCaptcha.php';

        return $container->services['victor_prdh.recaptcha'] = new \ReCaptcha\ReCaptcha($container->getEnv('GOOGLE_RECAPTCHA_SECRET_KEY'));
    }
}
