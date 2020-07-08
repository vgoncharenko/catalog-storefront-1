<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.BundleItemOption</code>
 */
class BundleItemOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>float quantity = 2;</code>
     */
    protected $quantity = 0.0;
    /**
     * Generated from protobuf field <code>bool is_default = 3;</code>
     */
    protected $is_default = false;
    /**
     * Generated from protobuf field <code>float price = 4;</code>
     */
    protected $price = 0.0;
    /**
     * Generated from protobuf field <code>string price_type = 5;</code>
     */
    protected $price_type = '';
    /**
     * Generated from protobuf field <code>bool can_change_quantity = 6;</code>
     */
    protected $can_change_quantity = false;
    /**
     * Generated from protobuf field <code>string label = 7;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string entity_id = 8;</code>
     */
    protected $entity_id = '';
    /**
     * Generated from protobuf field <code>int32 position = 9;</code>
     */
    protected $position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type float $quantity
     *     @type bool $is_default
     *     @type float $price
     *     @type string $price_type
     *     @type bool $can_change_quantity
     *     @type string $label
     *     @type string $entity_id
     *     @type int $position
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float quantity = 2;</code>
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Generated from protobuf field <code>float quantity = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkFloat($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_default = 3;</code>
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Generated from protobuf field <code>bool is_default = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->is_default = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float price = 4;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>float price = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string price_type = 5;</code>
     * @return string
     */
    public function getPriceType()
    {
        return $this->price_type;
    }

    /**
     * Generated from protobuf field <code>string price_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceType($var)
    {
        GPBUtil::checkString($var, true);
        $this->price_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool can_change_quantity = 6;</code>
     * @return bool
     */
    public function getCanChangeQuantity()
    {
        return $this->can_change_quantity;
    }

    /**
     * Generated from protobuf field <code>bool can_change_quantity = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanChangeQuantity($var)
    {
        GPBUtil::checkBool($var);
        $this->can_change_quantity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string label = 7;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 8;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, true);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 position = 9;</code>
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Generated from protobuf field <code>int32 position = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->position = $var;

        return $this;
    }
}