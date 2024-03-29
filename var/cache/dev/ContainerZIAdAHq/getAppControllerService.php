<?php

namespace ContainerZIAdAHq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAppControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AppController' shared autowired service.
     *
     * @return \App\Controller\AppController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AppController.php';

        $container->services['App\\Controller\\AppController'] = $instance = new \App\Controller\AppController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\AppController', $container));

        return $instance;
    }
}
