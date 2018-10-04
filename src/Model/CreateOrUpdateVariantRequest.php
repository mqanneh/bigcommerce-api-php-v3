<?php
/**
 * CreateOrUpdateVariantRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * CreateOrUpdateVariantRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateOrUpdateVariantRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateOrUpdateVariantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'variant_id' => 'int',
        'state' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'product_id' => 'product_id',
        'variant_id' => 'variant_id',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'variant_id' => 'setVariantId',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'variant_id' => 'getVariantId',
        'state' => 'getState'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_ACTIVE = 'ACTIVE';
    const STATE_DISABLED = 'DISABLED';
    const STATE_ERRORED = 'ERRORED';
    const STATE_PENDING = 'PENDING';
    const STATE_PENDING_DISABLE = 'PENDING_DISABLE';
    const STATE_PENDING_DELETE = 'PENDING_DELETE';
    const STATE_QUEUED = 'QUEUED';
    const STATE_REJECTED = 'REJECTED';
    const STATE_SUBMITTED = 'SUBMITTED';
    const STATE_DELETED = 'DELETED';
    const STATE_UNKNOWN_LISTING_STATE = 'UNKNOWN_LISTING_STATE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
            self::STATE_ERRORED,
            self::STATE_PENDING,
            self::STATE_PENDING_DISABLE,
            self::STATE_PENDING_DELETE,
            self::STATE_QUEUED,
            self::STATE_REJECTED,
            self::STATE_SUBMITTED,
            self::STATE_DELETED,
            self::STATE_UNKNOWN_LISTING_STATE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['variant_id'] === null) {
            $invalid_properties[] = "'variant_id' can't be null";
        }
        $allowed_values = ["ACTIVE", "DISABLED", "ERRORED", "PENDING", "PENDING_DISABLE", "PENDING_DELETE", "QUEUED", "REJECTED", "SUBMITTED", "DELETED", "UNKNOWN_LISTING_STATE"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['variant_id'] === null) {
            return false;
        }
        $allowed_values = ["ACTIVE", "DISABLED", "ERRORED", "PENDING", "PENDING_DISABLE", "PENDING_DELETE", "QUEUED", "REJECTED", "SUBMITTED", "DELETED", "UNKNOWN_LISTING_STATE"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param int $variant_id
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('ACTIVE', 'DISABLED', 'ERRORED', 'PENDING', 'PENDING_DISABLE', 'PENDING_DELETE', 'QUEUED', 'REJECTED', 'SUBMITTED', 'DELETED', 'UNKNOWN_LISTING_STATE');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'ACTIVE', 'DISABLED', 'ERRORED', 'PENDING', 'PENDING_DISABLE', 'PENDING_DELETE', 'QUEUED', 'REJECTED', 'SUBMITTED', 'DELETED', 'UNKNOWN_LISTING_STATE'");
        }
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}

