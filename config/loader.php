<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
*/

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