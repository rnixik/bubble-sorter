<?php

declare(strict_types=1);

namespace BubbleSorter\Swapper;

use BubbleSorter\Collection\CollectionInterface;

interface SwapperInterface
{
    public function swap(CollectionInterface $collection, int $indexA, int $indexB): CollectionInterface;
}
