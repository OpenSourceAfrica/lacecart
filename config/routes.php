<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

return [
    'routes' => [
        '/:controller/:action[/:param]' => [
            'prefix' => 'LaceCart\Store\\'
        ],
        '/:controller[/]' => [
            'prefix' => 'LaceCart\Store\\'
        ],
        $admin_folder .'/:controller/:action[/:param]' => [
            'prefix' => 'LaceCart\Backend\\'
        ],
        $admin_folder . '/:controller[/]' => [
            'prefix' => 'LaceCart\Backend\\'
        ],
    ]
];