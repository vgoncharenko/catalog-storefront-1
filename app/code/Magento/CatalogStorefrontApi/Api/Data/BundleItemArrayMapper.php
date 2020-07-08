<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class BundleItemArrayMapper
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
    * @param BundleItem $dto
    * @return array
    */
    public function convertToArray(BundleItem $dto)
    {
        $result = [];
        $result["option_id"] = $dto->getOptionId();
        $result["title"] = $dto->getTitle();
        $result["required"] = $dto->getRequired();
        $result["type"] = $dto->getType();
        $result["position"] = $dto->getPosition();
        $result["sku"] = $dto->getSku();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getOptions() as $fieldArrayDto) {
            $fieldData[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\BundleItemOptionInterface::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["options"] = $fieldArray;
        return $result;
    }
}