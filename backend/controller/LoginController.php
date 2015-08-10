<?php
/**
 * Created by LaceCart.
 * Author: Akinyele V. OLubodun
 * Date: 7/29/15
 * Time: 5:49 AM
 */

namespace LaceCart\Backend;

class LoginController extends BaseController
{
    public function index()
    {
        echo "You are at the backend!";
    }

    public function error()
    {
        // Handle a non-match route request
        echo "here";
    }

}