<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogProduct\Model\Storage\Client;

use Magento\CatalogProduct\Model\Storage\Client\Config\EntityConfigInterface;
use Magento\CatalogProduct\Model\Storage\Client\Config\EntityConfigPool;
use Magento\CatalogProduct\Model\Storage\Client\Config\NestedEntityConfigInterface;
use Magento\Framework\App\DeploymentConfig\Reader;
use Magento\Framework\Exception\ConfigurationMismatchException;
use Magento\Framework\Config\File\ConfigFilePool;

/**
 * Client Config.
 *
 * Temporal solution to handle configurations for storage while catalog storefront application is a part
 * of Magento monolith.
 * This Class contains a few hard-codes and rely on a strict and "hidden" structure of connection configuration.
 *
 * For now connection is setup during the installation of Magento application
 * @see \Magento\CatalogProduct\Setup\Recurring
 *
 * Example that we hard-code during installation of Magento:
 * 'catalog-store-front' => [
 *     'connections' => [
 *         'default' => [
 *             'protocol' => 'http',
 *             'hostname' => 'localhost',
 *             'port' => '9200',
 *             'username' => '',
 *             'password' => '',
 *             'timeout' => 3
 *         ]
 *     ],
 *     'timeout' => 60,
 *     'alias_name' => 'catalog_storefront',
 *     'source_prefix' => 'catalog_storefront_v',
 *     'source_current_version' => 1
 * ]
 *
 * For now you only has to follow the structure and modify value of each option to appropriate that correspond to
 * your environment. It's possible by particularly modify the app/etc/env.php file that is the representation
 * of connection configuration in the Magento application.
 *
 * TODO: MC-29894
 */
class Config
{
    /**
     * @var array
     */
    private $connectionConfig;

    /**
     * @var array
     */
    private $clientOptions;

    /**
     * @var EntityConfigPool
     */
    private $entityConfigPool;

    /**
     * Initialize Elasticsearch Client
     *
     * @param Reader $configReader
     * @param EntityConfigPool $entityConfigPool
     * @throws ConfigurationMismatchException
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     */
    public function __construct(Reader $configReader, EntityConfigPool $entityConfigPool)
    {
        $configData = $configReader->load(ConfigFilePool::APP_ENV)['catalog-store-front'];
        $options = $configData['connections']['default'];

        if (empty($options['hostname']) || ((!empty($options['enableAuth'])
                    && ($options['enableAuth'] == 1)) && (empty($options['username']) || empty($options['password'])))
        ) {
            throw new ConfigurationMismatchException(
                __('The search failed because of a search engine misconfiguration.')
            );
        }
        $this->connectionConfig = $options;
        $this->clientOptions = $configData;
        $this->entityConfigPool = $entityConfigPool;
    }

    /**
     * Return connection config of the Client.
     *
     * @return array
     */
    public function getConnectionConfig()
    {
        return $this->connectionConfig;
    }

    /**
     * Get entity config instance.
     *
     * @param string $entityName
     * @return EntityConfigInterface|NestedEntityConfigInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function getEntityConfig(string $entityName): EntityConfigInterface
    {
        return $this->entityConfigPool->getConfig($entityName);
    }

    /**
     * Build config.
     *
     * @return array
     */
    public function buildConfig()
    {
        $portString = '';
        if (!empty($this->connectionConfig['port'])) {
            $portString = ':' . $this->connectionConfig['port'];
        }

        $host = $this->connectionConfig['protocol'] . '://' . $this->connectionConfig['hostname'] . $portString;

        $result['hosts'] = [$host];

        return $result;
    }
}
