<?php
namespace evt;

use ZF\Apigility\Provider\ApigilityProviderInterface;


class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'evt\V1\Rest\VistaPaisEstado\VistaPaisEstadoMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaPaisEstado\VistaPaisEstadoMapper($adapter);
                },
                'evt\V1\Rest\VistaPaisEstado\VistaPaisEstadoResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaPaisEstado\VistaPaisEstadoMapper');
                    return new \evt\V1\Rest\VistaPaisEstado\VistaPaisEstadoResource($mapper);
                },
                'evt\V1\Rest\VistaEstadoCiudad\VistaEstadoCiudadMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaEstadoCiudad\VistaEstadoCiudadMapper($adapter);
                },
                'evt\V1\Rest\VistaEstadoCiudad\VistaEstadoCiudadResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaEstadoCiudad\VistaEstadoCiudadMapper');
                    return new \evt\V1\Rest\VistaEstadoCiudad\VistaEstadoCiudadResource($mapper);
                },        
            ),
        );
    }
}
