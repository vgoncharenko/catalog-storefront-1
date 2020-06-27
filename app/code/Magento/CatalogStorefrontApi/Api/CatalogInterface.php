<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api;

use Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ProductsGetResultInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportProductsResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesResponseInterface;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetRequestInterface;
use Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponseInterface;

/**
 * Autogenerated description for CatalogInterface interface
 */
interface CatalogInterface
{
    /**
     * Autogenerated description for getProducts interface method
     *
     * @param ProductsGetRequestInterface $request
     * @return ProductsGetResultInterface
     * @throws \Throwable
     */
    public function getProducts(ProductsGetRequestInterface $request): ProductsGetResultInterface;

    /**
     * Autogenerated description for importProducts interface method
     *
     * @param ImportProductsRequestInterface $request
     * @return ImportProductsResponseInterface
     * @throws \Throwable
     */
    public function importProducts(ImportProductsRequestInterface $request): ImportProductsResponseInterface;

    /**
     * Autogenerated description for importCategories interface method
     *
     * @param ImportCategoriesRequestInterface $request
     * @return ImportCategoriesResponseInterface
     * @throws \Throwable
     */
    public function importCategories(ImportCategoriesRequestInterface $request): ImportCategoriesResponseInterface;

    /**
     * Autogenerated description for getCategories interface method
     *
     * @param CategoriesGetRequestInterface $request
     * @return CategoriesGetResponseInterface
     * @throws \Throwable
     */
    public function getCategories(CategoriesGetRequestInterface $request): CategoriesGetResponseInterface;
}
