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

class CountryForm extends FormBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function form()
    {
        $country_name = new Input\Text('lace-country-name');
        $country_name->setLabel('Country Name:')
            ->setRequired(true)
            ->addValidator(new Validator\Alpha());

        $submit = new Input\Submit('submit', 'SUBMIT');

        $this->form->addElements([$country_name, $submit]);

        return $this->form;
    }
}