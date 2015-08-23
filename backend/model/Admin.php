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


use LaceCart\Application;

class Admin extends AbstractModel
{
    /**
     * @var   string
     */
    protected $tableName = Database::ADMINISTRATOR;

    /**
     * @var   string
     */
    protected $primaryId = Database::ADMINISTRATOR_PRIMARY_KEY;

    /**
     * @var   boolean
     */
    protected $auto = true;


    public function __construct()
    {

    }

    public static function authenticate($username, $password)
    {

    }

}