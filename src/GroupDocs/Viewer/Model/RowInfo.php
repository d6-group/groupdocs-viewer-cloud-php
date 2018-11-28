<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="RowInfo.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Viewer\Model;

use \ArrayAccess;
use \GroupDocs\Viewer\ObjectSerializer;

/*
 * RowInfo
 *
 * @description The page text row information.
 */
class RowInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RowInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'text' => 'string',
        'rowLeft' => 'double',
        'rowTop' => 'double',
        'rowWidth' => 'double',
        'rowHeight' => 'double',
        'textCoordinates' => 'double[]',
        'characterCoordinates' => 'double[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'text' => null,
        'rowLeft' => 'double',
        'rowTop' => 'double',
        'rowWidth' => 'double',
        'rowHeight' => 'double',
        'textCoordinates' => 'double',
        'characterCoordinates' => 'double'
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'text',
        'rowLeft' => 'rowLeft',
        'rowTop' => 'rowTop',
        'rowWidth' => 'rowWidth',
        'rowHeight' => 'rowHeight',
        'textCoordinates' => 'textCoordinates',
        'characterCoordinates' => 'characterCoordinates'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'rowLeft' => 'setRowLeft',
        'rowTop' => 'setRowTop',
        'rowWidth' => 'setRowWidth',
        'rowHeight' => 'setRowHeight',
        'textCoordinates' => 'setTextCoordinates',
        'characterCoordinates' => 'setCharacterCoordinates'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'rowLeft' => 'getRowLeft',
        'rowTop' => 'getRowTop',
        'rowWidth' => 'getRowWidth',
        'rowHeight' => 'getRowHeight',
        'textCoordinates' => 'getTextCoordinates',
        'characterCoordinates' => 'getCharacterCoordinates'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['rowLeft'] = isset($data['rowLeft']) ? $data['rowLeft'] : null;
        $this->container['rowTop'] = isset($data['rowTop']) ? $data['rowTop'] : null;
        $this->container['rowWidth'] = isset($data['rowWidth']) ? $data['rowWidth'] : null;
        $this->container['rowHeight'] = isset($data['rowHeight']) ? $data['rowHeight'] : null;
        $this->container['textCoordinates'] = isset($data['textCoordinates']) ? $data['textCoordinates'] : null;
        $this->container['characterCoordinates'] = isset($data['characterCoordinates']) ? $data['characterCoordinates'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Row text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets rowLeft
     *
     * @return double
     */
    public function getRowLeft()
    {
        return $this->container['rowLeft'];
    }

    /*
     * Sets rowLeft
     *
     * @param double $rowLeft Row left coordinate.
     *
     * @return $this
     */
    public function setRowLeft($rowLeft)
    {
        $this->container['rowLeft'] = $rowLeft;

        return $this;
    }

    /*
     * Gets rowTop
     *
     * @return double
     */
    public function getRowTop()
    {
        return $this->container['rowTop'];
    }

    /*
     * Sets rowTop
     *
     * @param double $rowTop Row top coordinate.
     *
     * @return $this
     */
    public function setRowTop($rowTop)
    {
        $this->container['rowTop'] = $rowTop;

        return $this;
    }

    /*
     * Gets rowWidth
     *
     * @return double
     */
    public function getRowWidth()
    {
        return $this->container['rowWidth'];
    }

    /*
     * Sets rowWidth
     *
     * @param double $rowWidth Row width.
     *
     * @return $this
     */
    public function setRowWidth($rowWidth)
    {
        $this->container['rowWidth'] = $rowWidth;

        return $this;
    }

    /*
     * Gets rowHeight
     *
     * @return double
     */
    public function getRowHeight()
    {
        return $this->container['rowHeight'];
    }

    /*
     * Sets rowHeight
     *
     * @param double $rowHeight Row height.
     *
     * @return $this
     */
    public function setRowHeight($rowHeight)
    {
        $this->container['rowHeight'] = $rowHeight;

        return $this;
    }

    /*
     * Gets textCoordinates
     *
     * @return double[]
     */
    public function getTextCoordinates()
    {
        return $this->container['textCoordinates'];
    }

    /*
     * Sets textCoordinates
     *
     * @param double[] $textCoordinates Text coordinates.
     *
     * @return $this
     */
    public function setTextCoordinates($textCoordinates)
    {
        $this->container['textCoordinates'] = $textCoordinates;

        return $this;
    }

    /*
     * Gets characterCoordinates
     *
     * @return double[]
     */
    public function getCharacterCoordinates()
    {
        return $this->container['characterCoordinates'];
    }

    /*
     * Sets characterCoordinates
     *
     * @param double[] $characterCoordinates Characters coordinates.
     *
     * @return $this
     */
    public function setCharacterCoordinates($characterCoordinates)
    {
        $this->container['characterCoordinates'] = $characterCoordinates;

        return $this;
    }
    /*
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /*
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /*
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /*
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /*
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


