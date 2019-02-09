<?php

namespace BubbleSorter\Collection;

use ArrayAccess;
use BubbleSorter\Swapper\SwapperInterface;
use Countable;

interface CollectionInterface extends ArrayAccess, Countable, SwapperInterface
{
    /**
     * Compares two items
     *
     * @param object $itemA
     * @param object $itemB
     * @return bool return true if $itemA is bigger than $itemB
     */
    public function isBigger(object $itemA, object $itemB): bool;
}
