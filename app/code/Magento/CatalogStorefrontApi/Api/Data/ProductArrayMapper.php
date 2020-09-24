<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for Product class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class ProductArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param Product $dto
    * @return array
    */
    public function convertToArray(Product $dto)
    {
        $result = [];
        $result["id"] = $dto->getId();
        $result["attribute_set_id"] = $dto->getAttributeSetId();
        $result["has_options"] = $dto->getHasOptions();
        $result["created_at"] = $dto->getCreatedAt();
        $result["updated_at"] = $dto->getUpdatedAt();
        $result["sku"] = $dto->getSku();
        $result["type_id"] = $dto->getTypeId();
        $result["status"] = $dto->getStatus();
        $result["stock_status"] = $dto->getStockStatus();
        $result["name"] = $dto->getName();
        $result["description"] = $dto->getDescription();
        $result["short_description"] = $dto->getShortDescription();
        $result["url_key"] = $dto->getUrlKey();
        $result["qty"] = $dto->getQty();
        $result["tax_class_id"] = $dto->getTaxClassId();
        $result["weight"] = $dto->getWeight();
        if ($dto->getImage() !== null) {
            $result["image"] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ImageArrayMapper::class)
                ->convertToArray($dto->getImage());
        }
        if ($dto->getSmallImage() !== null) {
            $result["small_image"] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ImageArrayMapper::class)
                ->convertToArray($dto->getSmallImage());
        }
        if ($dto->getThumbnail() !== null) {
            $result["thumbnail"] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ImageArrayMapper::class)
                ->convertToArray($dto->getThumbnail());
        }
        $result["swatch_image"] = $dto->getSwatchImage();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getMediaGallery() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\MediaGalleryItemArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["media_gallery"] = $fieldArray;
        $result["visibility"] = $dto->getVisibility();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getDynamicAttributes() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["dynamic_attributes"] = $fieldArray;
        $result["meta_description"] = $dto->getMetaDescription();
        $result["meta_keyword"] = $dto->getMetaKeyword();
        $result["meta_title"] = $dto->getMetaTitle();
        $result["categories"] = $dto->getCategories();
        $result["required_options"] = $dto->getRequiredOptions();
        $result["created_in"] = $dto->getCreatedIn();
        $result["updated_in"] = $dto->getUpdatedIn();
        $result["quantity_and_stock_status"] = $dto->getQuantityAndStockStatus();
        $result["options_container"] = $dto->getOptionsContainer();
        $result["msrp_display_actual_price_type"] = $dto->getMsrpDisplayActualPriceType();
        $result["is_returnable"] = $dto->getIsReturnable();
        $result["url_suffix"] = $dto->getUrlSuffix();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getOptions() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\OptionArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["options"] = $fieldArray;
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getUrlRewrites() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\UrlRewriteArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["url_rewrites"] = $fieldArray;
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getVariants() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\VariantArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["variants"] = $fieldArray;
        $result["country_of_manufacture"] = $dto->getCountryOfManufacture();
        $result["gift_message_available"] = $dto->getGiftMessageAvailable();
        $result["special_price"] = $dto->getSpecialPrice();
        $result["special_from_date"] = $dto->getSpecialFromDate();
        $result["special_to_date"] = $dto->getSpecialToDate();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getProductLinks() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ProductLinkArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["product_links"] = $fieldArray;
        $result["canonical_url"] = $dto->getCanonicalUrl();
        $result["price_view"] = $dto->getPriceView();
        $result["links_purchased_separately"] = $dto->getLinksPurchasedSeparately();
        $result["links_title"] = $dto->getLinksTitle();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getDownloadableProductLinks() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\DownloadableLinkArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["downloadable_product_links"] = $fieldArray;
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getSamples() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\SampleArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["samples"] = $fieldArray;
        $result["only_x_left_in_stock"] = $dto->getOnlyXLeftInStock();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getGroupedItems() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\GroupedItemArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["grouped_items"] = $fieldArray;
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getProductOptions() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ProductOptionArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["product_options"] = $fieldArray;
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getShopperInputOptions() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\ProductShopperInputOptionArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["shopper_input_options"] = $fieldArray;
        return $result;
    }
}
