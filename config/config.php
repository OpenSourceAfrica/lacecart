<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

return new \Pop\Config\Config([

    'database' => [
        'adapter'    => 'mysql',
        'host'       => '',
        'username'   => '',
        'password'   => '',
        'dbname'     => '',
    ],

    'pathTo' => [
        'admin' => realpath(__DIR__ . '/../backend/'),
        'store' => realpath(__DIR__ . '/../store/'),
    ]
]);
