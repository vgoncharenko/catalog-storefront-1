<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class ProductVariantMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = ProductVariantInterface::class;

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
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return ProductVariant
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            if ($valueData === null) {
                continue;
            }
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param ProductVariant $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(ProductVariant $dto, string $key, $value): void
    {
        switch ($key) {
            case "id":
                $dto->setId((string) $value);
                break;
            case "option_value_id":
                $dto->setOptionValueId((array) $value);
                break;
            case "price":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\CatalogStorefrontApi\Api\Data\PriceMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setPrice($convertedArray);
                break;
        }
    }
}