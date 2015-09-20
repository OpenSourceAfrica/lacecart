<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/6/15
 * Time: 9:13 PM
 */

namespace LaceCart\Backend;

class LocationsController extends ControllerBase
{
    public function index()
    {
        $location = Location::findAll();

        $this->setView('location/countries');
        $this->view->title = 'Location';
        $this->view->location = $location;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function view($id = '')
    {
        $location_zones = LocationZones::findBy(['country_id' => $id], ['order' => 'name ASC']);

        $this->setView('location/zones');
        $this->view->title = 'Location Zones';
        $this->view->zone_id = $id;
        $this->view->location_zones = $location_zones;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function viewzones($id = '')
    {
        $location_zone_areas = LocationZoneAreas::findBy(['zone_id' => $id], ['order' => 'name ASC']);

        $this->setView('location/zone_areas');
        $this->view->title = 'Location Zone Areas';
        $this->view->location_zone_areas = $location_zone_areas;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function add()
    {
        $location = new LocationForm();
        $form = $location->form();

        if ($this->request->isPost()) {

            $form->setFieldValues($this->request->getPost());

            if ($form->isValid()) {

                $country_name = $this->request->getPost('lace-country-name'); //get country
                $country_iso3 = $this->request->getPost('lace-country-iso3'); //get iso3
                $country_iso2 = $this->request->getPost('lace-country-iso2'); //get iso2
                $post_code = $this->request->getPost('lace-postcode'); //get post code
                $enabled = $this->request->getPost('lace-enabled'); //get enabled

                $location = new Location();
                $location->save([
                    'name' => $country_name,
                    'iso_code_3' => $country_iso3,
                    'iso_code_2' => $country_iso2,
                    'postcode_required' => isset($post_code) ? $post_code : 0,
                    'status' => isset($enabled) ? $enabled : 0
                ]);

                //redirect to country
                $this->session->setRequestValue('success', 'Country Successfully Added', 1);
                $this->response->redirect($this->request->getBasePath() . '/' .$this->request->getPath(0) . '/locations');
            }
        }

        $this->setView('location/add_country');
        $this->view->title = 'Add Location';
        $this->view->form = $form;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function addzone($id = '')
    {
        $locationZone = new LocationZoneForm();
        $form = $locationZone->form();

        if ($this->request->isPost()) {

            $form->setFieldValues($this->request->getPost());

            if ($form->isValid()) {

                $country_zone_name = $this->request->getPost('lace-zone-name'); //get zone name
                $country_iso3 = $this->request->getPost('lace-zone-code'); //get zone code
                $enabled = $this->request->getPost('lace-enabled'); //get enabled

                $location = new LocationZones();
                $location->save([
                    'name' => $country_zone_name,
                    'code' => $country_iso3,
                    'country_id' => $id,
                    'status' => isset($enabled) ? $enabled : 0
                ]);

                //redirect to country
                $this->session->setRequestValue('success', 'Country Zone Successfully Added', 1);
                $this->response->redirect($this->request->getBasePath() . '/' .$this->request->getPath(0) . '/locations/view/' . $id);
            }
        }

        $this->setView('location/add_zone');
        $this->view->title = 'Add Location Zone';
        $this->view->form = $form;
        $this->response->setBody($this->view->render());
        $this->response->send();
    }

    public function addzonesarea()
    {

    }

    public function edit($id = '')
    {

    }

}