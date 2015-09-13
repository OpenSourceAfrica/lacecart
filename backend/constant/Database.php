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


class Database
{
    //Database Tables
    const ADMINISTRATOR = 'administrator';
    const PERMISSIONS = 'permissions';
    const DEPARTMENTS = 'departments';
    const COUNTRY = 'countries';
    const COUNTRY_ZONES = 'country_zones';
    const COUNTRY_ZONE_AREAS = 'country_zone_areas';

    //Primary Keys
    const PRIMARY_KEY = 'id';
    const ADMINISTRATOR_PRIMARY_KEY = 'admin_id';
}