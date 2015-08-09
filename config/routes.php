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
        '/:controller/:action[/:param]' => [
            'prefix' => 'LaceCart\Store\\',
            'action'     => 'index',
            'default'     => true
        ],
        '/:controller[/]' => [
            'prefix' => 'LaceCart\Store\\',
            'action'     => 'index',
            'default'    => true
        ],
        $admin_folder .'/:controller/:action[/:param]' => [
            'prefix' => 'LaceCart\Backend\\',
            'action'     => 'index',
            'default'     => true
        ],
        $admin_folder . '/:controller[/]' => [
            'prefix' => 'LaceCart\Backend\\',
            'action'     => 'index',
            'default'     => true
        ],
    ]
];