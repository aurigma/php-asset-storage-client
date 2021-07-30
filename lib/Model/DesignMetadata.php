<?php
/**
 * DesignMetadata
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\AssetStorage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssetStorage API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\AssetStorage\Model;

use \ArrayAccess;
use \Aurigma\AssetStorage\ObjectSerializer;

/**
 * DesignMetadata Class Doc Comment
 *
 * @category Class
 * @description Design metadata
 * @package  Aurigma\AssetStorage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DesignMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DesignMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fonts' => '\Aurigma\AssetStorage\Model\DesignFontMetadata[]',
        'surfaces' => '\Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]',
        'has_data_schema' => 'bool',
        'data_schema_id' => 'string',
        'data_schema_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fonts' => null,
        'surfaces' => null,
        'has_data_schema' => null,
        'data_schema_id' => null,
        'data_schema_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fonts' => 'fonts',
        'surfaces' => 'surfaces',
        'has_data_schema' => 'hasDataSchema',
        'data_schema_id' => 'dataSchemaId',
        'data_schema_name' => 'dataSchemaName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fonts' => 'setFonts',
        'surfaces' => 'setSurfaces',
        'has_data_schema' => 'setHasDataSchema',
        'data_schema_id' => 'setDataSchemaId',
        'data_schema_name' => 'setDataSchemaName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fonts' => 'getFonts',
        'surfaces' => 'getSurfaces',
        'has_data_schema' => 'getHasDataSchema',
        'data_schema_id' => 'getDataSchemaId',
        'data_schema_name' => 'getDataSchemaName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fonts'] = $data['fonts'] ?? null;
        $this->container['surfaces'] = $data['surfaces'] ?? null;
        $this->container['has_data_schema'] = $data['has_data_schema'] ?? null;
        $this->container['data_schema_id'] = $data['data_schema_id'] ?? null;
        $this->container['data_schema_name'] = $data['data_schema_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets fonts
     *
     * @return \Aurigma\AssetStorage\Model\DesignFontMetadata[]|null
     */
    public function getFonts()
    {
        return $this->container['fonts'];
    }

    /**
     * Sets fonts
     *
     * @param \Aurigma\AssetStorage\Model\DesignFontMetadata[]|null $fonts Design font metadata list
     *
     * @return self
     */
    public function setFonts($fonts)
    {
        $this->container['fonts'] = $fonts;

        return $this;
    }

    /**
     * Gets surfaces
     *
     * @return \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]|null
     */
    public function getSurfaces()
    {
        return $this->container['surfaces'];
    }

    /**
     * Sets surfaces
     *
     * @param \Aurigma\AssetStorage\Model\DesignSurfaceMetadata[]|null $surfaces Design surface metadata list
     *
     * @return self
     */
    public function setSurfaces($surfaces)
    {
        $this->container['surfaces'] = $surfaces;

        return $this;
    }

    /**
     * Gets has_data_schema
     *
     * @return bool|null
     */
    public function getHasDataSchema()
    {
        return $this->container['has_data_schema'];
    }

    /**
     * Sets has_data_schema
     *
     * @param bool|null $has_data_schema Indicates whether design has data schema
     *
     * @return self
     */
    public function setHasDataSchema($has_data_schema)
    {
        $this->container['has_data_schema'] = $has_data_schema;

        return $this;
    }

    /**
     * Gets data_schema_id
     *
     * @return string|null
     */
    public function getDataSchemaId()
    {
        return $this->container['data_schema_id'];
    }

    /**
     * Sets data_schema_id
     *
     * @param string|null $data_schema_id Design data schema id. Empty string for embedded schema
     *
     * @return self
     */
    public function setDataSchemaId($data_schema_id)
    {
        $this->container['data_schema_id'] = $data_schema_id;

        return $this;
    }

    /**
     * Gets data_schema_name
     *
     * @return string|null
     */
    public function getDataSchemaName()
    {
        return $this->container['data_schema_name'];
    }

    /**
     * Sets data_schema_name
     *
     * @param string|null $data_schema_name Design data schema name
     *
     * @return self
     */
    public function setDataSchemaName($data_schema_name)
    {
        $this->container['data_schema_name'] = $data_schema_name;

        return $this;
    }
    /**
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

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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

    /**
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

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


