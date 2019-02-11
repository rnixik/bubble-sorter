<?php

declare(strict_types=1);

namespace BubbleSorter\Swapper;

use BubbleSorter\Collection\CollectionInterface;

class Swapper implements SwapperInterface
{
    /**
     * @inheritdoc
     */
    public function swap(CollectionInterface $collection, int $indexA, int $indexB): CollectionInterface
    {
        $itemA = $collection->get($indexA);
        $itemB = $collection->get($indexB);
        $updatedCollection = $collection->set($indexB, $itemA);
        $updatedCollection = $updatedCollection->set($indexA, $itemB);

        return $updatedCollection;
    }
}
