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

interface EntityUsageInterface
{

    public function getEntityId(): string;

    public function getServiceId(): string;

    public function getUsageId(): string;

    public function getMetadata(): array;

}
