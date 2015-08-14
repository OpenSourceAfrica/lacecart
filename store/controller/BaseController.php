<?php
/**
 * Created by LaceCart.
 * Author: Akinyele V. OLubodun
 * Date: 7/29/15
 * Time: 5:49 AM
 */

namespace LaceCart\Store;

use \Pop\Controller\AbstractController,
    \Moltin\Cart\Cart,
    \Moltin\Cart\Storage\Session,
    \Moltin\Cart\Identifier\Cookie;

class BaseController extends AbstractController
{
    private $services = null;
    protected $session = null;
    protected $cart = null;

    public function __construct($services)
    {
        $this->services = $services;

        $this->session = $this->services->get('session');
        $this->cart = new Cart(new Session(), new Cookie());
    }
}