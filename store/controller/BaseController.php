<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
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