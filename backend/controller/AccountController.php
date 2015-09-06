<?php
/**
*  2015 Lace Cart
*
*  @author LaceCart Dev <info@lacecart.com.ng>
*  @copyright  2015 LaceCart Team
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of LaceCart Team
**/

namespace LaceCart\Backend;

use LaceCart\Library\Auth as Auth;

class AccountController extends ControllerBase
{
    public function index()
    {
        $login = new LoginForm();
        $form = $login->form();
        $error = null;

        if ($this->request->isPost()) {

            $form->setFieldValues($this->request->getPost());

            if ($form->isValid()) {

                //Authenticate User
                $username = $this->request->getPost('lace-admin-username'); //get username
                $password = $this->request->getPost('lace-admin-password'); //get password

                $auth = new Auth();
                if($auth->login($username, $password)){

                    //get user information and set in a session
                    $user = Admin::findBy([
                        'email' => $username
                    ]);

                    $this->session->user = $user;

                    //redirect to members area
                    $this->response->redirect($this->request->getBasePath() . '/' .$this->request->getPath(0) . '/dashboard');
                }

                //show login error
                $error = 'Login error!';
            }
        }

        $this->setView('account/account');
        $this->view->title = 'Welcome';
        $this->view->form = $form;
        $this->view->error = $error;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function logout()
    {
        $this->session->__unset('user');
        $this->session->set_flashdata('logout', 'You have successfully logged out');
        $this->response->redirect($this->request->getBasePath() . '/' .$this->request->getPath(0) . '/account');
    }

    public function error()
    {
        // Handle a non-match route request
    }

}