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
    public function setServices(array $services)
    {
        foreach ($services as $name => $service) {
            if (isset($service['call'])) {
                $call   = $service['call'];
                $params = (isset($service['params'])) ? $service['params'] : null;
            } else {
                throw new Exception('Error: A service configuration parameter was not valid.');
            }

            $this->setService($name, $call, $params);
        }

        return $this;
    }
}