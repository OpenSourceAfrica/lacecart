<?php

require_once __DIR__ . '/popphp/pop-loader/src/ClassLoader.php';

$autoloader = new Pop\Loader\ClassLoader();
$autoloader->addClassMapFromFile(__DIR__ . '/classmap.php');

return $autoloader;
