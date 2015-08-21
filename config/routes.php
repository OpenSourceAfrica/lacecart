<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

//Getting backend folder
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