<?php

declare(strict_types=1);

namespace BubbleSorter\Generator;

use BubbleSorter\Collection\CollectionGetterInterface;

final class IndexesGenerator implements GeneratorInterface
{
    /**
     * @inheritdoc
     */
    public function setCollection(CollectionGetterInterface $collection): void
    {
        // Nothing to do
    }

    /**
     * @inheritdoc
     */
    public function generate(int $startIndex, int $stopIndex, int $direction): \Generator
    {
        if ($direction === DirectionEnum::FORWARD) {
            for ($i = $startIndex; $i <= $stopIndex; $i++) {
                yield $i;
            }
        } else {
            for ($i = $startIndex; $i >= $stopIndex; $i--) {
                yield $i;
            }
        }
    }
}
