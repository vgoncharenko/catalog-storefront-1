<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for DeleteCategoriesRequest class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class DeleteCategoriesRequest implements DeleteCategoriesRequestInterface
{

    /**
     * @var array
     */
    private $categoryIds;

    /**
     * @var string
     */
    private $store;
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getCategoryIds(): array
    {
        return (array) $this->categoryIds;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setCategoryIds(array $value): void
    {
        $this->categoryIds = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStore(): string
    {
        return (string) $this->store;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStore(string $value): void
    {
        $this->store = $value;
    }
}
