<?php

error_reporting(E_ALL);

/**
 * Require the vendor auto load
 */
require_once __DIR__ . '/vendor/autoload.php';

try {

    /**
     * Read the configuration
     */
    $env = 'local';

    switch ($env) {
        case 'production':
            error_reporting(0);
            $config = include __DIR__ . "/config/config.php";
            break;

        case 'local':
        default:
            ini_set('display_errors', 1);
            $config = include __DIR__ . "/config/config.php";
            break;
    }

    /**
     * Read auto-loader
     */
    include __DIR__ . "/config/loader.php";

    /**
     * Handle the request
     */
    $application = new LaceCart\Application(
        array_merge(
            include __DIR__ . "/config/routes.php",
            include __DIR__ . "/config/services.php"
        ));

    $application->run();

} catch (\Exception $e) {
    echo $e->getMessage();
}
