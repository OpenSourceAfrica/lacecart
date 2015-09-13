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

use Pop\Form\Element\Input,
    Pop\Validator;

class LocationForm extends FormBase
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

        $country_iso_3 = new Input\Text('lace-country-iso3');
        $country_iso_3->setLabel('ISO Code 3:')
            ->setRequired(true)
            ->addValidators([
                new Validator\Alpha(),
                new Validator\Length(3)
            ]);

        $country_iso_2 = new Input\Text('lace-country-iso2');
        $country_iso_2->setLabel('ISO Code 2:')
            ->setRequired(true)
            ->addValidators([
                new Validator\Alpha(),
                new Validator\Length(2)
            ]);

        $postcode_required = new Input\Checkbox('lace-postcode', '1');
        $postcode_required->setLabel('Post Code Required:')
            ->setAttributes(['checked' => 'checked']);

        $enabled = new Input\Checkbox('lace-enabled', '1');
        $enabled->setLabel('Enable:');

        $submit = new Input\Submit('submit', 'SUBMIT');

        //Adding Elements to form
        $this->form->addElements([$country_name, $country_iso_3, $country_iso_2, $postcode_required, $enabled, $submit]);

        return $this->form;
    }
}