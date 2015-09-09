<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/6/15
 * Time: 9:13 PM
 */

namespace LaceCart\Backend;


use LaceCart\Library\Utils;

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

    public function view($id)
    {

    }

    public function viewzones($id = '')
    {
        $location_zones = LocationZones::findBy(['country_id' => $id]);

        $this->setView('location/zones');
        $this->view->title = 'Location Zones';
        $this->view->location_zones = $location_zones;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function add()
    {
        echo "here";
    }

    public function addzones()
    {

    }

    public function addzoneareas()
    {

    }

    public function edit($id)
    {

    }


    public function addzone()
    {

    }
}