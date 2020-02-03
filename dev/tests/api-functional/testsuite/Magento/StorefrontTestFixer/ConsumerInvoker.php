<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\StorefrontTestFixer;

use Magento\TestFramework\Helper\Bootstrap;

/**
 * Invoke consumers to push data from Magento Monolith to Catalog Storefront service
 */
class ConsumerInvoker
{
    /**
     * Batch size
     */
    private const BATCHSIZE = 1000;

    /**
     * List of storefront consumers
     */
    private const CONSUMERS = [
        'storefront.catalog.category.update',
        'storefront.catalog.product.update',
        'storefront.catalog.data.consume',
    ];

    /**
     * Invoke consumers
     *
     * @param bool $invokeInTestsOnly
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function invoke($invokeInTestsOnly = false): void
    {
        if ($invokeInTestsOnly) {
            $trace = (new \Exception())->getTraceAsString();
            if (false === strpos($trace, 'src/Framework/TestCase.php')
                || false !== strpos($trace, 'ApiDataFixture->startTest')) {
                return;
            }
        }
        $objectManager = Bootstrap::getObjectManager();

        /** @var \Magento\Framework\MessageQueue\ConsumerFactory $consumerFactory */
        $consumerFactory = $objectManager->create(\Magento\Framework\MessageQueue\ConsumerFactory::class);
        foreach (self::CONSUMERS as $consumerName) {
            $consumer = $consumerFactory->get($consumerName, self::BATCHSIZE);
            $consumer->process(self::BATCHSIZE);
        }
    }
}
