<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/29/15
 * Time: 6:27 AM
 */

$loader = new \Pop\Loader\ClassLoader();

$autoLoadClasses = [
    realpath(__DIR__ . '/../backend/constant/'),
    realpath(__DIR__ . '/../backend/controller/'),
    realpath(__DIR__ . '/../backend/library/'),
    realpath(__DIR__ . '/../backend/model/'),
    realpath(__DIR__ . '/../store/constant/'),
    realpath(__DIR__ . '/../store/controller/'),
    realpath(__DIR__ . '/../store/library/'),
    realpath(__DIR__ . '/../store/model/'),
];

foreach($autoLoadClasses as $row)
    $loader->addClassMapFromDir($row);

$loader->register(true);