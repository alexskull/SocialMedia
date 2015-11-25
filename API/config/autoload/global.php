<?php
return array(
    'db' => array(
        'adapters' => array(
            'MySql-Prueba' => array(),
        ),
        'database' => 'evttest',
        'driver' => 'PDO_Mysql',
        'hostname' => 'startup-xpress.com',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'view_manager' => array(
        // Development setting: enable this in your application configuration
        // to get full exception stack traces in your API-Problem responses.
        'display_exceptions' => true,
    ),
);
