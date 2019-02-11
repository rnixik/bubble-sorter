<?php

declare(strict_types=1);

namespace BubbleSorter\Generator;

use BubbleSorter\Collection\CollectionGetterInterface;

interface GeneratorInterface
{
    /**
     * Sets a collection for generator
     *
     * @param CollectionGetterInterface $collection
     */
    public function setCollection(CollectionGetterInterface $collection): void;

    /**
     * @param int $startIndex index in collection to start generation at
     * @param int $stopIndex index in collection to stop generation at
     * @param int $direction @see DirectionEnum
     * @return \Generator
     */
    public function generate(int $startIndex, int $stopIndex, int $direction): \Generator;
}
