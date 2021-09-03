<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestFramework\Fixture\Data;

/**
 * Interface for data fixtures processors
 */
interface ProcessorInterface
{
    /**
     * @param DataFixtureInterface $fixture
     * @param array $data
     * @return array
     */
    public function process(DataFixtureInterface $fixture, array $data): array;
}
