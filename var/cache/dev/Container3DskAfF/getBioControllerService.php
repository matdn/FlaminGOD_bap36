<?php

namespace Container3DskAfF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBioControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BioController' shared autowired service.
     *
     * @return \App\Controller\BioController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BioController.php';

        $container->services['App\\Controller\\BioController'] = $instance = new \App\Controller\BioController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\BioController', $container));

        return $instance;
    }
}
