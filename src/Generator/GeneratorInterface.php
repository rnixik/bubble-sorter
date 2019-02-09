<?php

namespace BubbleSorter\Generator;

use BubbleSorter\Collection\CollectionInterface;
use Generator;
use LogicException;

interface GeneratorInterface
{
    /**
     * Sets a collection for generator
     *
     * @param CollectionInterface $collection
     */
    public function setCollection(CollectionInterface $collection): void;

    /**
     * @param int $startIndex index in collection to start generation at
     * @param int $stopIndex index in collection to stop generation at
     * @param int $direction @see DirectionEnum
     * @return Generator
     * @throws LogicException
     */
    public function generate(int $startIndex, int $stopIndex, int $direction): Generator;
}
