<?php

declare(strict_types=1);

namespace BubbleSorter\Sorter;

use BubbleSorter\Collection\CollectionInterface;

interface SorterInterface
{
    /**
     * Sorts collection
     *
     * @param CollectionInterface $collection
     * @return CollectionInterface
     */
    public function sort(CollectionInterface $collection): CollectionInterface;
}
