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

use Pop\Http\Request;
use \Pop\Controller\AbstractController;
use \Pop\View\View;
use Pop\Http\Response;


class BaseController extends AbstractController
{
    private $services = null;

    protected $db = null;
    protected $session = null;
    protected $config = null;

    protected $response;
    protected $request;
    protected $view;
    protected $viewPath;

    public function __construct($services)
    {
        $this->services = $services;

        $this->db = $this->services->get('db');
        $this->config = $this->services->get('config');
        $this->session = $this->services->get('session');

        //set view path
        $this->response = new Response();
        $this->request = new Request();
    }

    /**
     * Set the View Template Path
     *
     * @param string $viewPath
     */
    public function setView($view_path)
    {
        $this->view = new View($this->config->application->viewDir . '/' .$view_path . '.phtml');
        $this->view->set('request', $this->request);
        $this->view->set('header', $this->config->application->viewDir . '/partial/header.phtml');
        $this->view->set('footer', $this->config->application->viewDir . '/partial/footer.phtml');
    }
}