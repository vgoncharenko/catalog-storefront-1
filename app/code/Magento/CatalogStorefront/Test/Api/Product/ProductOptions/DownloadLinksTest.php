<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefront\Test\Api\Product\ProductOptions;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\CatalogStorefront\Model\CatalogService;
use Magento\CatalogStorefront\Test\Api\StorefrontTestsAbstract;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductOptionArrayMapper;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\TestFramework\Helper\Bootstrap;
use Magento\TestFramework\Helper\CompareArraysRecursively;

/**
 * Tests downloadable link product options on the store front
 */
class DownloadLinksTest extends StorefrontTestsAbstract
{
    /**
     * Test Constants
     */
    const TEST_SKU = 'downloadable-product';
    const STORE_CODE = 'default';

    /**
     * @var string[]
     */
    private $attributesToCompare = [
        'product_options'
    ];

    /**
     * @var CatalogService
     */
    private $catalogService;

    /**
     * @var ProductsGetRequestInterface
     */
    private $productsGetRequestInterface;

    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var ProductOptionArrayMapper
     */
    protected $arrayMapper;

    /**
     * @var CompareArraysRecursively
     */
    protected $compareArraysRecursively;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->catalogService = Bootstrap::getObjectManager()->create(CatalogService::class);
        $this->productsGetRequestInterface = Bootstrap::getObjectManager()->create(ProductsGetRequestInterface::class);
        $this->productRepository = Bootstrap::getObjectManager()->create(ProductRepositoryInterface::class);
        $this->arrayMapper = Bootstrap::getObjectManager()->create(ProductOptionArrayMapper::class);
        $this->compareArraysRecursively = Bootstrap::getObjectManager()->create(CompareArraysRecursively::class);
    }

    /**
     * Validate downloadable URL product data
     *
     * @magentoDataFixture Magento/Downloadable/_files/product_downloadable_with_link_url_and_sample_url.php
     * @magentoDbIsolation disabled
     * @dataProvider downloadableLinkUrlProvider
     * @param array $expected
     * @throws NoSuchEntityException
     */
    public function testDownloadableLinksUrlOptionData(array $expected): void
    {
        $product = $this->productRepository->get(self::TEST_SKU);

        $this->productsGetRequestInterface->setIds([$product->getId()]);
        $this->productsGetRequestInterface->setStore(self::STORE_CODE);
        $this->productsGetRequestInterface->setAttributeCodes($this->attributesToCompare);
        $catalogServiceItem = $this->catalogService->getProducts($this->productsGetRequestInterface);
        self::assertNotEmpty($catalogServiceItem->getItems());

        $actual = [];
        foreach ($catalogServiceItem->getItems()[0]->getProductOptions() as $item) {
            $actual[] = $this->arrayMapper->convertToArray($item);
        }

        $diff = $this->compareArraysRecursively->execute(
            $expected,
            $actual
        );
        self::assertEquals([], $diff, "Actual response doesn't equal expected data");
    }

    /**
     * Validate downloadable file product data
     *
     * @magentoDataFixture Magento/Downloadable/_files/product_downloadable_with_files.php
     * @magentoDbIsolation disabled
     * @dataProvider downloadableLinkFileProvider
     * @param array $expected
     * @throws NoSuchEntityException
     */
    public function testDownloadableLinksFileOptionData(array $expected): void
    {
        $product = $this->productRepository->get(self::TEST_SKU);

        $this->productsGetRequestInterface->setIds([$product->getId()]);
        $this->productsGetRequestInterface->setStore(self::STORE_CODE);
        $this->productsGetRequestInterface->setAttributeCodes($this->attributesToCompare);
        $catalogServiceItem = $this->catalogService->getProducts($this->productsGetRequestInterface);
        self::assertNotEmpty($catalogServiceItem->getItems());

        $actual = [];
        foreach ($catalogServiceItem->getItems()[0]->getProductOptions() as $item) {
            $actual[] = $this->arrayMapper->convertToArray($item);
        }

        $diff = $this->compareArraysRecursively->execute(
            $expected,
            $actual
        );
        self::assertEquals([], $diff, "Actual response doesn't equal expected data");
    }

    /**
     * Data provider for downloadable links URL option
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @return array
     */
    public function downloadableLinkUrlProvider(): array
    {
        return [
            [
                [
                    [
                        'id' => '1',
                        'label' => '',
                        'sort_order' => 0,
                        'required' => false,
                        'render_type' => '',
                        'type' => '',
                        'values' => [
                            [
                                'id' => 'ZG93bmxvYWRhYmxlLzE1',
                                'label' =>  'Downloadable Product Link',
                                'sort_order' =>  '1',
                                'default' => false,
                                'image_url' => '',
                                'qty_mutability' => false,
                                'qty' => 0.0,
                                'number_of_downloads' =>  '15',
                                'is_shareable' =>  '2',
                                'link_url' =>  'http://example.com/downloadable.txt',
                                'info_url' =>  'http://example.com/downloadable.txt',
                                'price' => [
                                    [
                                        'scope' => 'NOT LOGGED IN',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'General',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'Wholesale',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'Retailer',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    /**
     * Data provider for downloadable links file option
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @return array
     */
    public function downloadableLinkFileProvider(): array
    {
        return [
            [
                [
                    [
                        'id' => '1',
                        'label' => '',
                        'sort_order' => 0,
                        'required' => false,
                        'render_type' => '',
                        'type' => '',
                        'values' => [
                            [
                                'id' => 'ZG93bmxvYWRhYmxlLzE0',
                                'label' =>  'Downloadable Product Link',
                                'sort_order' =>  '1',
                                'default' => false,
                                'image_url' => '',
                                'qty_mutability' => false,
                                'qty' => 0.0,
                                'number_of_downloads' =>  '15',
                                'is_shareable' =>  '2',
                                'link_url' =>  '/j/e/jellyfish_2_4_1.jpg',
                                'info_url' =>  '/j/e/jellyfish_1_3.jpg',
                                'price' => [
                                    [
                                        'scope' => 'NOT LOGGED IN',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'General',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'Wholesale',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ],
                                    [
                                        'scope' => 'Retailer',
                                        'regular_price' => 15.0,
                                        'final_price' => 15.0
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}