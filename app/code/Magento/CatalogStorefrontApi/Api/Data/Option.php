<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for Option class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
final class Option implements OptionInterface
{

    /**
     * @var string
     */
    private $optionId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $isRequire;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $maxCharacters;

    /**
     * @var string
     */
    private $fileExtension;

    /**
     * @var string
     */
    private $imageSizeX;

    /**
     * @var string
     */
    private $imageSizeY;

    /**
     * @var string
     */
    private $sortOrder;

    /**
     * @var string
     */
    private $defaultTitle;

    /**
     * @var string
     */
    private $storeTitle;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $defaultPrice;

    /**
     * @var string
     */
    private $defaultPriceType;

    /**
     * @var string
     */
    private $storePrice;

    /**
     * @var string
     */
    private $storePriceType;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $priceType;

    /**
     * @var string
     */
    private $required;

    /**
     * @var string
     */
    private $productSku;

    /**
     * @var array
     */
    private $value;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getOptionId(): string
    {
        return (string) $this->optionId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setOptionId(string $value): void
    {
        $this->optionId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getProductId(): string
    {
        return (string) $this->productId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setProductId(string $value): void
    {
        $this->productId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getType(): string
    {
        return (string) $this->type;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setType(string $value): void
    {
        $this->type = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getIsRequire(): string
    {
        return (string) $this->isRequire;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setIsRequire(string $value): void
    {
        $this->isRequire = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSku(): string
    {
        return (string) $this->sku;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void
    {
        $this->sku = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getMaxCharacters(): string
    {
        return (string) $this->maxCharacters;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setMaxCharacters(string $value): void
    {
        $this->maxCharacters = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getFileExtension(): string
    {
        return (string) $this->fileExtension;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setFileExtension(string $value): void
    {
        $this->fileExtension = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getImageSizeX(): string
    {
        return (string) $this->imageSizeX;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setImageSizeX(string $value): void
    {
        $this->imageSizeX = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getImageSizeY(): string
    {
        return (string) $this->imageSizeY;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setImageSizeY(string $value): void
    {
        $this->imageSizeY = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSortOrder(): string
    {
        return (string) $this->sortOrder;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSortOrder(string $value): void
    {
        $this->sortOrder = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getDefaultTitle(): string
    {
        return (string) $this->defaultTitle;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setDefaultTitle(string $value): void
    {
        $this->defaultTitle = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStoreTitle(): string
    {
        return (string) $this->storeTitle;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStoreTitle(string $value): void
    {
        $this->storeTitle = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTitle(): string
    {
        return (string) $this->title;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTitle(string $value): void
    {
        $this->title = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getDefaultPrice(): string
    {
        return (string) $this->defaultPrice;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setDefaultPrice(string $value): void
    {
        $this->defaultPrice = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getDefaultPriceType(): string
    {
        return (string) $this->defaultPriceType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setDefaultPriceType(string $value): void
    {
        $this->defaultPriceType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStorePrice(): string
    {
        return (string) $this->storePrice;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStorePrice(string $value): void
    {
        $this->storePrice = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStorePriceType(): string
    {
        return (string) $this->storePriceType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStorePriceType(string $value): void
    {
        $this->storePriceType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getPrice(): string
    {
        return (string) $this->price;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setPrice(string $value): void
    {
        $this->price = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getPriceType(): string
    {
        return (string) $this->priceType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setPriceType(string $value): void
    {
        $this->priceType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getRequired(): string
    {
        return (string) $this->required;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setRequired(string $value): void
    {
        $this->required = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getProductSku(): string
    {
        return (string) $this->productSku;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setProductSku(string $value): void
    {
        $this->productSku = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\OptionValueInterface[]
     */
    public function getValue(): array
    {
        return (array) $this->value;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\OptionValueInterface[] $value
     * @return void
     */
    public function setValue(array $value): void
    {
        $this->value = $value;
    }
}
