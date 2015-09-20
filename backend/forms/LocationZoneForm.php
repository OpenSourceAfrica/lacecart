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

class LocationZoneForm extends FormBase
{
    public function __construct()
    {
        parent::__construct();
    }

    public function form()
    {
        $country_name = new Input\Text('lace-zone-name');
        $country_name->setLabel('Zone Name:')
            ->setRequired(true)
            ->addValidator(new Validator\Alpha());

        $country_zone_code = new Input\Text('lace-zone-code');
        $country_zone_code->setLabel('ISO Code 3:')
            ->setRequired(true)
            ->setAttribute('maxlength', '3')
            ->addValidators([
                new Validator\Alpha(),
                new Validator\Length(3)
            ]);

        $enabled = new Input\Checkbox('lace-enabled', '1');
        $enabled->setLabel('Enable:');

        $submit = new Input\Submit('submit', 'SUBMIT');

        //Adding Elements to form
        $this->form->addElements([$country_name, $country_zone_code, $enabled, $submit]);

        return $this->form;
    }
}