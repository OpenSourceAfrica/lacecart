<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 8/25/15
 * Time: 6:05 PM
 */

namespace LaceCart\Backend;

use Pop\Form\Form;

class FormBase extends Form
{
    protected $form;

    public function __construct()
    {
        $this->form = new form();
        $this->form->setAttribute('id', 'my-form');
    }

    /**
     * This method returns the default value for field 'csrf'
     */
    public function getCsrf()
    {

    }

    /**
     * Prints messages for a specific element
     */
    public function messages($name)
    {

    }
}