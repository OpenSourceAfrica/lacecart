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

use Pop\Form\Element\Input;
use Pop\Validator;

class LoginForm extends FormBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function form()
    {
        $username = new Input\Text('lace-admin-username');
        $username->setLabel('Username:')
            ->setRequired(true)
            ->addValidator(new Validator\Email());

        $password = new Input\Password('lace-admin-password');
        $password->setLabel('Password:')
            ->setRequired(true);

        $submit = new Input\Submit('submit', 'SUBMIT');

        $this->form->addElements([$username, $password, $submit]);

        return $this->form;
    }
}