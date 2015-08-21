<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

use Pop\Db\Adapter\Mysql as Adapter;

return [
    'services' => [
        'session' => [
            'call' => 'Pop\Web\Session::getInstance'
        ],
        'db' =>  [
            'call' => function () use ($config) {
                return new Adapter(
                    [
                        'host' => $config->database->host,
                        'username' => $config->database->username,
                        'password' => $config->database->password,
                        'database' => $config->database->database
                    ]
                );
            }
        ]
    ]
];


