<?php
/*
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
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