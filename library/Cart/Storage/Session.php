<?php

/**
 * This file is part of Moltin Cart, a PHP package to handle
 * your shopping basket.
 *
 * Copyright (c) 2013 Moltin Ltd.
 * http://github.com/moltin/cart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package moltin/cart
 * @author Chris Harvey <chris@molt.in>
 * @copyright 2013 Moltin Ltd.
 * @version dev
 * @link http://github.com/moltin/cart
 *
 */

namespace Moltin\Cart\Storage;

use Moltin\Cart\Item,
    \Pop\Web\Session as S;

class Session extends Runtime implements \Moltin\Cart\StorageInterface
{
    private $session;

    function __construct()
    {
        $this->session = S::getInstance();
    }

    /**
     * The Session store constructor
     */
    public function restore()
    {
        if (isset($this->session->cart)) static::$cart = unserialize($this->session->cart);
    }

    /**
     * The session store destructor.
     */
    public function __destruct()
    {
        if (isset($this->session->cart)) $this->session->cart = serialize(static::$cart);
    }
}
