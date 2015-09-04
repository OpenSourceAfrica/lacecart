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

use LaceCart\Library\Auth as Auth;

class AccountController extends BaseController
{
    public function index()
    {
        $login = new LoginForm();
        $form = $login->form();

        if ($this->request->isPost()) {

            $form->setFieldValues($this->request->getPost());

            if ($form->isValid()) {

                //Authenticate User
                $username = $this->request->getPost('lace-admin-username');//get username
                $password = $this->request->getPost('lace-admin-password');//get password

                $auth = new Auth();
                if($auth->login($username, $password)){
                    //redirect
                }

                //show login error
            }
        }

        $this->setView('account/account');
        $this->view->title = 'Welcome';
        $this->view->form = $form;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function error()
    {
        // Handle a non-match route request
        echo "here";
    }

}