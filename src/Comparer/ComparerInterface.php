<?php

declare(strict_types=1);

namespace BubbleSorter\Comparer;

use BubbleSorter\Item\AbstractItem;

interface ComparerInterface
{
    /**
     * Compares two items
     *
     * @param AbstractItem $itemA
     * @param AbstractItem $itemB
     * @return bool return true if $itemA is bigger than $itemB
     */
    public function isBigger(AbstractItem $itemA, AbstractItem $itemB): bool;
}
