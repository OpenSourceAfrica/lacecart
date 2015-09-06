<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

use Pop\Db\Db as DB;
use Pop\Db\Record as Adapter;

return [
    'services' => [
        'session' => [
            'call' => 'Pop\Web\Session::getInstance'
        ],
        'db' =>  [
            'call' => function () use ($config) {
                        Adapter::setDb(DB::connect($config->database->adapter, [
                            'database' => $config->database->database,
                            'username' => $config->database->username,
                            'password' => $config->database->password,
                            'host'     => $config->database->host
                        ]));
            }
        ],
        'config' => [
            'call' => function () use ($config) {
                return $config;
            }
        ],
        'nav' => [
            'call' => function () use ($nav) {
                return $nav;
            }
        ]
    ]
];


