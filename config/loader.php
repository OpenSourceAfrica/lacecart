<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:27 AM
 */

$loader = new \Pop\Loader\ClassLoader();

$autoLoadClasses = [
    realpath($config->pathTo->admin),
    realpath($config->pathTo->store),
    realpath(__DIR__ . '/../core/')
];

foreach($autoLoadClasses as $row)
    $loader->addClassMapFromDir($row);