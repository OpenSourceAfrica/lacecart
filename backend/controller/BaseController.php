<?php
/**
 * Created by LaceCart.
 * Author: Akinyele V. OLubodun
 * Date: 7/29/15
 * Time: 5:49 AM
 */

namespace LaceCart\Backend;

use \Pop\Controller\AbstractController;


class BaseController extends AbstractController
{
    private $services = null;
    protected $session = null;

    public function __construct($services)
    {
        $this->services = $services;

        $this->session = $this->services->get('session');
    }
}