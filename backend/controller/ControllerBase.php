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

use Pop\Http\Request,
    Pop\Controller\AbstractController,
    Pop\View\View,
    Pop\Http\Response,
    Pop\Nav\Nav;


class ControllerBase extends AbstractController
{
    private $services = null;

    protected $db = null;
    protected $session = null;
    protected $config = null;
    protected $nav = null;

    protected $response;
    protected $request;
    protected $view;
    protected $viewPath;

    /**
     * Construct for BaseController
     * @param $services
     */
    public function __construct($services)
    {
        $this->services = $services;

        $this->db = $this->services->get('db');
        $this->config = $this->services->get('config');
        $this->session = $this->services->get('session');
        $nav = $this->services->get('nav');

        //set view path
        $this->response = new Response();
        $this->request = new Request();
        $this->nav = new Nav($nav['nav']['tree'], $nav['nav']['config']);

        //send user to login if session is not active
        if(!$this->session->user && $this->request->getPath(1) != 'account') {
            $this->response->redirect($this->request->getBasePath() . '/' .$this->request->getPath(0) . '/account');
        }
    }

    /**
     * Set the View Template Path
     *
     * @param string $viewPath
     */
    public function setView($view_path)
    {
        $this->view = new View($this->config->application->viewDir . '/' .$view_path . '.phtml');
        $this->view->set('nav', $this->nav);
        $this->view->set('session', $this->session);
        $this->view->set('request', $this->request);
        $this->view->set('basepath', $this->request->getBasePath() . '/' . $this->request->getPath(0));
        $this->view->set('header', $this->config->application->viewDir . '/partial/header.phtml');
        $this->view->set('footer', $this->config->application->viewDir . '/partial/footer.phtml');
    }
}