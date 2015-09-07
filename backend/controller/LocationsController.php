<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/6/15
 * Time: 9:13 PM
 */

namespace LaceCart\Backend;


use LaceCart\Library\Utils,
    LaceCart\Backend\Location;
use Pop\Pdf\Build\Font\TrueType\Table\Loca;

class LocationsController extends ControllerBase
{
    public function index()
    {
        //print_r(Utils::build_dropdown_list('\LaceCart\Backend\Admin', 'email', 'admin_id', 'test'));
        $location = Location::findAll();

        $this->setView('location/countries');
        $this->view->title = 'Location';
        $this->view->location = $location;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function add()
    {

    }

    public function edit($id)
    {

    }
}