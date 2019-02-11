<?php

declare(strict_types=1);

namespace BubbleSorter\Generator;

use BubbleSorter\Collection\CollectionGetterInterface;

final class CollectionGenerator implements GeneratorInterface
{
    /** @var CollectionGetterInterface */
    private $collection;

    /**
     * @inheritdoc
     */
    public function setCollection(CollectionGetterInterface $collection): void
    {
        $this->collection = $collection;
    }

    /**
     * @inheritdoc
     */
    public function generate(int $startIndex, int $stopIndex, int $direction): \Generator
    {
        if ($direction === DirectionEnum::FORWARD) {
            for ($i = $startIndex; $i <= $stopIndex; $i++) {
                (yield $i => $this->collection->get($i));
            }
        } else {
            for ($i = $startIndex; $i >= $stopIndex; $i--) {
                (yield $i => $this->collection->get($i));
            }
        }
    }
}
