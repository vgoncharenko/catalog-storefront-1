<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogStorefrontConnector\Model;

use Magento\CatalogStorefrontConnector\Model\Publisher\CategoryPublisher;
use Magento\CatalogStorefrontConnector\Model\Data\UpdatedEntitiesDataInterface;

/**
 * Consumer processes messages with store front categories data
 */
class CategoriesQueueConsumer
{
    /**
     * @var CategoryPublisher
     */
    private $categoryPublisher;

    /**
     * @param CategoryPublisher $categoryPublisher
     */
    public function __construct(
        CategoryPublisher $categoryPublisher
    ) {
        $this->categoryPublisher = $categoryPublisher;
    }

    /**
     * Process collected categories IDs for update
     *
     * Process messages from storefront.collect.updated.categories.data topic
     * and publish new messages to storefront.catalog.data.consume topic
     *
     * @param UpdatedEntitiesDataInterface $message
     * @return void
     * @throws \Exception
     */
    public function processMessages(UpdatedEntitiesDataInterface $message): void
    {
        $storeCategories = $this->getUniqueIdsForStores([$message]);
        foreach ($storeCategories as $storeId => $categoryIds) {
            $this->categoryPublisher->publish($categoryIds, $storeId);
        }
    }

    /**
     * Get unique ids for stores from messages
     *
     * @param array $messages
     * @return array
     */
    private function getUniqueIdsForStores(array $messages): array
    {
        $result = [];
        /** @var UpdatedEntitiesDataInterface $updatedCategoriesData */
        foreach ($messages as $updatedCategoriesData) {
            $storeId = $updatedCategoriesData->getStoreId();
            $storeCategoriesIds = $updatedCategoriesData->getEntityIds();
            $result[$storeId] = isset($result[$storeId])
                // phpcs:ignore Magento2.Performance.ForeachArrayMerge
                ? \array_unique(\array_merge($result[$storeId], $storeCategoriesIds))
                : $storeCategoriesIds;
        }

        return $result;
    }
}