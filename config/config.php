<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:08 AM
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
