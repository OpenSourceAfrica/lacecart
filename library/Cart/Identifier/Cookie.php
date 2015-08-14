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

namespace Moltin\Cart\Identifier;

use \Pop\Web\Cookie as C;

class Cookie implements \Moltin\Cart\IdentifierInterface
{
    private $cookie;

    function __construct()
    {
        $this->cookie = C::getInstance();
    }

    /**
     * Get the current or new unique identifier
     * 
     * @return string The identifier
     */
    public function get()
    {
        if (isset($this->cookie->cart_identifier)) return $this->cookie->cart_identifier;

        return $this->regenerate();
    }

    /**
     * Regenerate the identifier
     * 
     * @return string The identifier
     */
    public function regenerate()
    {
        $identifier = md5(uniqid(null, true));

        $this->cookie->set('cart_identifier', $identifier, 0, "/");

        return $identifier;
    }

    /**
     * Forget the identifier
     * 
     * @return void
     */
    public function forget()
    {
        return $cookie->set('cart_identifier', null, time()-3600);
    }
}
