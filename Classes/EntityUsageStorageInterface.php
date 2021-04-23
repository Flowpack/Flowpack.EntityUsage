<?php
declare(strict_types=1);

namespace Flowpack\EntityUsage;

/*
 * This file is part of the Flowpack.EntityUsage package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

interface EntityUsageStorageInterface
{

    public function isInUse(string $entityId): bool;

    public function getUsages(string $entityId): EntityUsageQueryResultInterface;

    public function getUsagesForService(string $serviceId): EntityUsageQueryResultInterface;

    public function registerUsage(string $usageId, string $entityId, string $serviceId, array $metadata = []): void;

    public function unregisterUsage(string $usageId, string $entityId, string $serviceId): void;

    public function unregisterUsagesByEntity(string $entityId): void;

    public function unregisterUsagesByService(string $serviceId): void;

}
