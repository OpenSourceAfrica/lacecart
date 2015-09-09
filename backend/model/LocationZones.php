<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/7/15
 * Time: 3:54 PM
 */

namespace LaceCart\Backend;


class LocationZones extends AbstractModel
{
    /**
     * @var   string
     */
    protected $table = Database::COUNTRY_ZONES;

    /**
     * @var   string
     */
    protected $primaryKeys = [Database::PRIMARY_KEY];

    /**
     * @var   boolean
     */
    protected $auto = true;
}