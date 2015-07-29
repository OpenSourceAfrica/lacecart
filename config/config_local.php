<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:08 AM
 */

return new \Pop\Config\Config([

    'database' => [
        'adapter'    => 'Mysql',
        'host'       => 'rds-devdb.csfa9zmskroe.eu-west-1.rds.amazonaws.com',
        'username'   => 'dev-kpay',
        'password'   => getenv('DB_PASSWORD'),
        'dbname'     => 'kpay_dev',
    ]
]);
