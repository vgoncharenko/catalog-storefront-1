<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.ImportProductDataRequest</code>
 */
class ImportProductDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Product product = 1;</code>
     */
    protected $product = null;
    /**
     * List of imported attributes. Support patch update for set of top-level attributes
     *
     * Generated from protobuf field <code>repeated string attributes = 2;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Magento\CatalogStorefrontApi\Proto\Product $product
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           List of imported attributes. Support patch update for set of top-level attributes
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Product product = 1;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Product product = 1;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * List of imported attributes. Support patch update for set of top-level attributes
     *
     * Generated from protobuf field <code>repeated string attributes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * List of imported attributes. Support patch update for set of top-level attributes
     *
     * Generated from protobuf field <code>repeated string attributes = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }
}