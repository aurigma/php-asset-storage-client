<?php
/**
 * ResourceDto
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
 * ResourceDto Class Doc Comment
 *
 * @category Class
 * @description Resource dto class.
 * @package  Aurigma\AssetStorage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResourceDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResourceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'size' => 'int',
        'namespace' => 'string',
        'source_id' => 'string',
        'type' => 'string',
        'format' => 'string',
        'private' => 'bool',
        'anonymous_access' => 'bool',
        'url' => 'string',
        'tenant_id' => 'int',
        'id' => 'string',
        'owner_id' => 'string',
        'name' => 'string',
        'custom_fields' => 'array<string,mixed>',
        'last_modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'size' => 'int64',
        'namespace' => null,
        'source_id' => null,
        'type' => null,
        'format' => null,
        'private' => null,
        'anonymous_access' => null,
        'url' => null,
        'tenant_id' => 'int32',
        'id' => null,
        'owner_id' => null,
        'name' => null,
        'custom_fields' => null,
        'last_modified' => 'date-time'
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
        'size' => 'size',
        'namespace' => 'namespace',
        'source_id' => 'sourceId',
        'type' => 'type',
        'format' => 'format',
        'private' => 'private',
        'anonymous_access' => 'anonymousAccess',
        'url' => 'url',
        'tenant_id' => 'tenantId',
        'id' => 'id',
        'owner_id' => 'ownerId',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'last_modified' => 'lastModified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'size' => 'setSize',
        'namespace' => 'setNamespace',
        'source_id' => 'setSourceId',
        'type' => 'setType',
        'format' => 'setFormat',
        'private' => 'setPrivate',
        'anonymous_access' => 'setAnonymousAccess',
        'url' => 'setUrl',
        'tenant_id' => 'setTenantId',
        'id' => 'setId',
        'owner_id' => 'setOwnerId',
        'name' => 'setName',
        'custom_fields' => 'setCustomFields',
        'last_modified' => 'setLastModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'size' => 'getSize',
        'namespace' => 'getNamespace',
        'source_id' => 'getSourceId',
        'type' => 'getType',
        'format' => 'getFormat',
        'private' => 'getPrivate',
        'anonymous_access' => 'getAnonymousAccess',
        'url' => 'getUrl',
        'tenant_id' => 'getTenantId',
        'id' => 'getId',
        'owner_id' => 'getOwnerId',
        'name' => 'getName',
        'custom_fields' => 'getCustomFields',
        'last_modified' => 'getLastModified'
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
        $this->container['size'] = $data['size'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['anonymous_access'] = $data['anonymous_access'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['last_modified'] = $data['last_modified'] ?? null;
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
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Resource file size.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string|null $namespace Resource namespace.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id Resource source identifier.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Resource Type.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format Resource Format.
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private Resource 'private' tag. It indicates whether resource is private.
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets anonymous_access
     *
     * @return bool|null
     */
    public function getAnonymousAccess()
    {
        return $this->container['anonymous_access'];
    }

    /**
     * Sets anonymous_access
     *
     * @param bool|null $anonymous_access Resource 'anonymous access' tag. It indicates whether resource can be accessed anonymously.
     *
     * @return self
     */
    public function setAnonymousAccess($anonymous_access)
    {
        $this->container['anonymous_access'] = $anonymous_access;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Resource URL.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int|null $tenant_id Entity tenant identifier
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Entity unique identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id Entity owner identifier
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Entity name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return array<string,mixed>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,mixed>|null $custom_fields Entity custom attributes
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime|null $last_modified Last entity modification date and time
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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


