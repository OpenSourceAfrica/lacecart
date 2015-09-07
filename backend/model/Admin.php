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

class Admin extends AbstractModel
{
    /**
     * @var   string
     */
    protected $table = Database::ADMINISTRATOR;

    /**
     * @var   string
     */
    protected $primaryKeys = [Database::ADMINISTRATOR_PRIMARY_KEY];
}