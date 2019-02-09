<?php

namespace BubbleSorter\Generator;

use BubbleSorter\Collection\CollectionInterface;
use Generator;
use LogicException;

final class CollectionGenerator implements GeneratorInterface
{
    /** @var CollectionInterface */
    private $collection;

    /**
     * @inheritdoc
     */
    public function setCollection(CollectionInterface $collection): void
    {
        $this->collection = $collection;
    }

    /**
     * @inheritdoc
     */
    public function generate(int $startIndex, int $stopIndex, int $direction): Generator
    {
        if ($direction === DirectionEnum::FORWARD && $startIndex > $stopIndex) {
            throw new LogicException("Start index is less then stop index for forward direction");
        }

        if ($direction === DirectionEnum::BACKWARD && $startIndex < $stopIndex) {
            throw new LogicException("Stop index is less then start index for backward direction");
        }

        if (!$this->collection->offsetExists($startIndex)) {
            throw new LogicException("Start index is out of range");
        }

        if (!$this->collection->offsetExists($stopIndex)) {
            throw new LogicException("Stop index is out of range");
        }

        if ($direction === DirectionEnum::FORWARD) {
            for ($i = $startIndex; $i <= $stopIndex; $i++) {
                (yield $i => $this->collection[$i]);
            }
        } else {
            for ($i = $startIndex; $i >= $stopIndex; $i--) {
                (yield $i => $this->collection[$i]);
            }
        }
    }
}
