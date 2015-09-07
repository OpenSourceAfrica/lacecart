<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/7/15
 * Time: 3:54 PM
 */

namespace LaceCart\Backend;


class Location extends AbstractModel
{
    /**
     * @var   string
     */
    protected $table = Database::COUNTRY;

    /**
     * @var   string
     */
    protected $primaryKeys = [Database::COUNTRY_PRIMARY_KEY];

    /**
     * @var   boolean
     */
    protected $auto = true;
}