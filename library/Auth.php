<?php
/**
 * Created by PhpStorm.
 * User: olubodun.akinyele
 * Date: 9/3/15
 * Time: 6:59 PM
 */

namespace LaceCart\Library;

use Pop\Auth as Authentication,
    LaceCart\Backend\Admin;

class Auth extends Authentication\Auth
{
    /**
     * Constructor
     *
     * Instantiate the auth object
     *
     * @param int    $encryption
     * @param string $salt
     */
    public function __construct($encryption = Authentication\Auth::ENCRYPT_MD5, $salt = null)
    {
        $adapter = new Authentication\Adapter\Table('LaceCart\Backend\Admin', $encryption);
        $adapter->setUsernameField('email')->setPasswordField('password');
        parent::__construct($adapter, $encryption);
    }

    /**
     * Get Auth result
     *
     * @return string
     */
    public function login($username, $password)
    {
        $this->authenticate($username, $password);

        if ($this->isValid()) {
            return $this->getResult();
        }

        return false;
    }
}
