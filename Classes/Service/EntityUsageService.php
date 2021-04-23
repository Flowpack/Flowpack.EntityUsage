<?php
declare(strict_types=1);

namespace Flowpack\EntityUsage\Service;

/*
 * This file is part of the Flowpack.EntityUsage package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Flowpack\EntityUsage\EntityUsageQueryResultInterface;
use Flowpack\EntityUsage\EntityUsageStorageInterface;
use Neos\Flow\Annotations as Flow;

final class EntityUsageService
{
    /**
     * @var string
     */
    private $serviceId;

    /**
     * @Flow\Inject
     * @var EntityUsageStorageInterface
     */
    protected $entityUsageStorage;

    public function __construct(string $serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function isInUse(string $entityId): bool
    {
        return $this->entityUsageStorage->isInUse($entityId);
    }

    public function getUsages(string $entityId): EntityUsageQueryResultInterface
    {
        return $this->entityUsageStorage->getUsages($entityId);
    }

    public function getAllUsages(): EntityUsageQueryResultInterface
    {
        return $this->entityUsageStorage->getUsagesForService($this->serviceId);
    }

    public function registerUsage(string $usageId, string $entityId, array $metadata = []): void
    {
        $this->entityUsageStorage->registerUsage($usageId, $entityId, $this->serviceId, $metadata);
    }

    public function unregisterUsage(string $usageId, string $entityId): void
    {
        $this->entityUsageStorage->unregisterUsage($usageId, $entityId, $this->serviceId);
    }

    public function unregisterUsagesByEntity(string $entityId): void
    {
        $this->entityUsageStorage->unregisterUsagesByEntity($entityId);
    }

}
