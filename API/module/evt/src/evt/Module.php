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
                'evt\V1\Rest\VistaSubcategoria\VistaSubcategoriaMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaSubcategoria\VistaSubcategoriaMapper($adapter);
                },
                'evt\V1\Rest\VistaSubcategoria\VistaSubcategoriaResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaSubcategoria\VistaSubcategoriaMapper');
                    return new \evt\V1\Rest\VistaSubcategoria\VistaSubcategoriaResource($mapper);
                }, 
                'evt\V1\Rest\VistaUsuarioObtenerBasico\VistaUsuarioObtenerBasicoMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaUsuarioObtenerBasico\VistaUsuarioObtenerBasicoMapper($adapter);
                },
                'evt\V1\Rest\VistaUsuarioObtenerBasico\VistaUsuarioObtenerBasicoResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaUsuarioObtenerBasico\VistaUsuarioObtenerBasicoMapper');
                    return new \evt\V1\Rest\VistaUsuarioObtenerBasico\VistaUsuarioObtenerBasicoResource($mapper);
                }, 
                'evt\V1\Rest\VistaUsuariosXTipo\VistaUsuariosXTipoMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaUsuariosXTipo\VistaUsuariosXTipoMapper($adapter);
                },
                'evt\V1\Rest\VistaUsuariosXTipo\VistaUsuariosXTipoResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaUsuariosXTipo\VistaUsuariosXTipoMapper');
                    return new \evt\V1\Rest\VistaUsuariosXTipo\VistaUsuariosXTipoResource($mapper);
                }, 
                'evt\V1\Rest\VistaUsuarioSubcategorias\VistaUsuarioSubcategoriasMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaUsuarioSubcategorias\VistaUsuarioSubcategoriasMapper($adapter);
                },
                'evt\V1\Rest\VistaUsuarioSubcategorias\VistaUsuarioSubcategoriasResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaUsuarioSubcategorias\VistaUsuarioSubcategoriasMapper');
                    return new \evt\V1\Rest\VistaUsuarioSubcategorias\VistaUsuarioSubcategoriasResource($mapper);
                },    
                'evt\V1\Rest\VistaEvento\VistaEventoMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaEvento\VistaEventoMapper($adapter);
                },
                'evt\V1\Rest\VistaEvento\VistaEventoResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaEvento\VistaEventoMapper');
                    return new \evt\V1\Rest\VistaEvento\VistaEventoResource($mapper);
                },    
                'evt\V1\Rest\VistaUsuariosMuroGaleria\VistaUsuariosMuroGaleriaMapper' =>  function ($sm) {
                    $adapter = $sm->get('Zend\Db\Adapter\Adapter');
                    return new \evt\V1\Rest\VistaUsuariosMuroGaleria\VistaUsuariosMuroGaleriaMapper($adapter);
                },
                'evt\V1\Rest\VistaUsuariosMuroGaleria\VistaUsuariosMuroGaleriaResource' => function ($sm) {
                    $mapper = $sm->get('evt\V1\Rest\VistaUsuariosMuroGaleria\VistaUsuariosMuroGaleriaMapper');
                    return new \evt\V1\Rest\VistaUsuariosMuroGaleria\VistaUsuariosMuroGaleriaResource($mapper);
                },            
            ),
        );
    }
}
