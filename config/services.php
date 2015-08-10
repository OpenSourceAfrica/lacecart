<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:10 AM
 */

use LaceCart\Application as FactoryDefault;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

$services = [
        'session' => [
            'call' => 'Pop\Web\Session::getInstance'
        ]
];

//ToDo: Add database connection to the services
/**
 * Database connection is created based in the parameters defined in the configuration file
 */
/*$di->setServices('db', function () use ($config) {
    return new DbAdapter(array(
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'database' => $config->database->dbname
    ));
});*/

/**
 * Start the session the first time some component request the session service
 */
$di->setServices($services);


