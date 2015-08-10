<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 7/31/15
 * Time: 12:21 AM
 */

namespace LaceCart\Store;

class IndexController extends BaseController
{
    public function index()
    {
        $this->session->test = "hi";

        echo "You are in the Store";
    }
}