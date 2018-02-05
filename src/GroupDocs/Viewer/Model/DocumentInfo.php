<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DocumentInfo.php">
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
/*
 * DocumentInfo
 */

namespace GroupDocs\Viewer\Model;

use \ArrayAccess;
use \GroupDocs\Viewer\ObjectSerializer;

/*
 * DocumentInfo
 *
 * @description Describes document information.
 */
class DocumentInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DocumentInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileName' => 'string',
        'extension' => 'string',
        'fileFormat' => 'string',
        'size' => 'int',
        'dateModified' => '\DateTime',
        'pages' => '\GroupDocs\Viewer\Model\PageInfo[]',
        'attachments' => '\GroupDocs\Viewer\Model\AttachmentInfo[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileName' => null,
        'extension' => null,
        'fileFormat' => null,
        'size' => 'int64',
        'dateModified' => 'date-time',
        'pages' => null,
        'attachments' => null
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
        'fileName' => 'FileName',
        'extension' => 'Extension',
        'fileFormat' => 'FileFormat',
        'size' => 'Size',
        'dateModified' => 'DateModified',
        'pages' => 'Pages',
        'attachments' => 'Attachments'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileName' => 'setFileName',
        'extension' => 'setExtension',
        'fileFormat' => 'setFileFormat',
        'size' => 'setSize',
        'dateModified' => 'setDateModified',
        'pages' => 'setPages',
        'attachments' => 'setAttachments'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileName' => 'getFileName',
        'extension' => 'getExtension',
        'fileFormat' => 'getFileFormat',
        'size' => 'getSize',
        'dateModified' => 'getDateModified',
        'pages' => 'getPages',
        'attachments' => 'getAttachments'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['dateModified'] === null) {
            $invalidProperties[] = "'dateModified' can't be null";
        }
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
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['dateModified'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /*
     * Sets fileName
     *
     * @param string $fileName File name.
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /*
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /*
     * Sets extension
     *
     * @param string $extension Extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /*
     * Gets fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /*
     * Sets fileFormat
     *
     * @param string $fileFormat File format.
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

        return $this;
    }

    /*
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /*
     * Sets size
     *
     * @param int $size Size in bytes.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /*
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /*
     * Sets dateModified
     *
     * @param \DateTime $dateModified Modification date.
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /*
     * Gets pages
     *
     * @return \GroupDocs\Viewer\Model\PageInfo[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /*
     * Sets pages
     *
     * @param \GroupDocs\Viewer\Model\PageInfo[] $pages Pages information.
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /*
     * Gets attachments
     *
     * @return \GroupDocs\Viewer\Model\AttachmentInfo[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /*
     * Sets attachments
     *
     * @param \GroupDocs\Viewer\Model\AttachmentInfo[] $attachments List of attachments.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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
