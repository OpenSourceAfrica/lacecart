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

use Pop\Form\Form,
    Pop\Http\Request;

class FormBase extends Form
{
    protected $form;
    protected $request;

    public function __construct()
    {
        $this->form = new form();
        $this->form->setAttribute('id', 'my-form');
        $this->request = new Request();
    }
}