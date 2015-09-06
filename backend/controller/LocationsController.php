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
        print_r(Utils::build_dropdown_list('\LaceCart\Backend\Admin', 'email', 'admin_id', 'test'));
    }

    public function add()
    {

    }

    public function edit($id)
    {

    }
}