<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

//Getting request object
$request = new \Pop\Http\Request();
$request_base = $request->getBasePath() . '/' .$request->getPath(0);

//Getting backend folder
$admin_folder = str_replace(realpath(__DIR__ . '/..'), '', realpath($config->pathTo->admin));

$loader = new \Pop\Loader\ClassLoader();

$autoLoadClasses = [
    realpath($config->pathTo->admin),
    realpath($config->pathTo->store),
    realpath(__DIR__ . '/../core/'),
    realpath(__DIR__ . '/../library/'),
    realpath(__DIR__ . '/../language/')
];

foreach($autoLoadClasses as $row)
    $loader->addClassMapFromDir($row);