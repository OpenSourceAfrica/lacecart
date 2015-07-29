<?php

error_reporting(E_ALL);

/**
 * Require the vendor auto load
 */
require_once __DIR__ . '/../vendor/autoload.php';

try {

    /**
     * Read the configuration
     */
    $env = 'local';

    switch ($env) {
        case 'production':
            error_reporting(0);
            $config = include __DIR__ . "/../config/config_prod.php";
            break;

        case 'staging':
            $config = include __DIR__ . "/../config/config_staging.php";
            break;

        case 'development':
            $config = include __DIR__ . "/../app/config/config_dev.php";
            break;

        case 'local':
        default:
            ini_set('display_errors', 1);
            $config = include __DIR__ . "/../config/config_local.php";
            break;
    }

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../config/services.php";

    $route = include __DIR__ . "/../config/routes.php";

    /**
     * Handle the request
     */
    $application = new \Pop\Application();

    $application->loadRouter(new \Pop\Router\Router($route));

    $application->run();

} catch (\Exception $e) {
    echo $e->getMessage();
}
