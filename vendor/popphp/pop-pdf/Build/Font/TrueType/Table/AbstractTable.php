<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2015 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\Pdf\Build\Font\TrueType\Table;

/**
 * Abstract table class
 *
 * @category   Pop
 * @package    Pop_Pdf
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2015 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    2.0.0
 */
abstract class AbstractTable extends \ArrayObject implements TableInterface
{

    /**
     * Allowed properties
     * @var array
     */
    protected $allowed = [];

    /**
     * Read-only properties
     * @var array
     */
    protected $readOnly = [];

    /**
     * Constructor
     *
     * Instantiate an abstract object.
     *
     * @param  mixed $data
     * @return AbstractTable
     */
    public function __construct($data = [])
    {
        parent::__construct($data, self::ARRAY_AS_PROPS);
    }

    /**
     * Offset set method
     *
     * @param  string $name
     * @param  mixed  $value
     * @throws \InvalidArgumentException
     * @return void
     */
    public function offsetSet($name, $value)
    {
        if (!array_key_exists($name, $this->allowed)) {
            throw new \InvalidArgumentException("The property '" . $name . "' is not a valid property.");
        }

        if (in_array($name, $this->readOnly)) {
            throw new \InvalidArgumentException("The property '" . $name . "' is read only.");
        }

        $this->allowed[$name] = $value;
        parent::offsetSet($name, $value);
    }

    /**
     * Offset get method
     *
     * @param  string $name
     * @throws \InvalidArgumentException
     * @return mixed
     */
    public function offsetGet($name)
    {
        if (!array_key_exists($name, $this->allowed)) {
            throw new \InvalidArgumentException("The property '" . $name . "' is not a valid property.");
        }

        return parent::offsetGet($name);
    }

}
