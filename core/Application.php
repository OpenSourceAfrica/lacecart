<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/30/15
 * Time: 10:12 AM
 */

namespace LaceCart;

class Application extends \Pop\Application
{
    public function init()
    {
        if (null !== $this->router) {
            $this->router->addRouteParams(
                '*', [
                    'services' => $this->services
                ]
            );
        }

        parent::init();
    }
}