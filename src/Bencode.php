<?php
/**
 * Power2All Bencode
 *
 * Bencode serializer for PHP 5.3+.
 *
 * @package   Power2All\Bencode
 * @copyright Copyright (c) 2014, Ryan Chouinard, modded by Power2All
 * @author    Ryan Chouinard <rchouinard@gmail.com>, Power2All <info@power2all.com>
 * @license   MIT License - http://www.opensource.org/licenses/mit-license.php
 */

namespace Power2All\Bencode;

/**
 * Bencode class
 *
 * Provides static convenience methods for encoding and decoding bencode
 * encoded strings.
 */
class Bencode
{

    const TYPE_ARRAY = "array";
    const TYPE_OBJECT = "object"; // NOT IMPLEMENTED

    /**
     * Decode a bencode encoded string
     *
     * @param  string  $string The string to decode.
     * @param  string  $decodeType Flag used to indicate whether the decoded
     *   value should be returned as an object or an array.
     * @return mixed   Returns the appropriate data type for the decoded data.
     */
    public static function decode($string, $decodeType = self::TYPE_ARRAY)
    {
        return Decoder::decode($string, $decodeType);
    }

    /**
     * Encode a value into a bencode encoded string
     *
     * @param  mixed   $value The value to encode.
     * @return string  Returns a bencode encoded string.
     */
    public static function encode($value)
    {
        return Encoder::encode($value);
    }

}
