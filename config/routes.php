<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:39 AM
 */

//getting admin folder
$admin_folder = str_replace(realpath(__DIR__ . '/..'), '', realpath($config->pathTo->admin));

return [
    'routes' => [
        '/:controller/:action/:param' => [
            'controller' => 'LaceCart\Store\IndexController',
            'action'     => 'index',
        ],
        '/:controller' => [
            'controller' => 'LaceCart\Store\IndexController',
            'action'     => 'index',
            'default'    => true
        ],
            $admin_folder .'/:controller/:action/:param' => [
                'controller' => 'LaceCart\Backend\LoginController',
                'action'     => 'index'
        ],
            $admin_folder . '/:controller' => [
                'controller' => 'LaceCart\Backend\LoginController',
                'action'     => 'index'
        ],
    ]
];