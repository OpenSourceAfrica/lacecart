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
 * HMTX table class
 *
 * @category   Pop
 * @package    Pop_Pdf
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2015 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    2.0.0
 */
class Hmtx extends AbstractTable
{

    /**
     * Allowed properties
     * @var array
     */
    protected $allowed = [
        'glyphWidths' => []
    ];

    /**
     * Constructor
     *
     * Instantiate a TTF 'hmtx' table object.
     *
     * @param  \Pop\Pdf\Build\Font\TrueType $font
     * @return Hmtx
     */
    public function __construct(\Pop\Pdf\Build\Font\TrueType $font)
    {
        parent::__construct($this->allowed);

        $bytePos = $font->tableInfo['hmtx']->offset;

        for ($i = 0; $i < $font->numberOfHMetrics; $i++) {
            $ary = unpack('nglyphWidth/', $font->read($bytePos, 2));
            $this->glyphWidths[$i] = $font->shiftToSigned($ary['glyphWidth']);
            $bytePos += 4;
        }

        while (count($this->glyphWidths) < $font->numberOfGlyphs) {
            $this->glyphWidths[] = end($this->glyphWidths);
        }
    }

}
