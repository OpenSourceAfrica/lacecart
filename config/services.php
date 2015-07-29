<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:10 AM
 */

use \Pop\Service\Locator as Service,
    \Pop\Db\Adapter\Mysql as Adapter;

$di = new Service();

$services = [
              'url' => ['call'   => ''],
              'db' => ['call' => function () use ($config) {

                                      $adapter = new Adapter(
                                          [
                                              'host'    => $config->database->host,
                                              'username' => $config->database->username,
                                              'password' => $config->database->password,
                                              'database'   => $config->database->dbname
                                          ]
                                      );

                                      return $adapter;
                                  }]
            ];

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setServices($services);

/**
 * Set Config Object
 */
$di->set('config', $config);