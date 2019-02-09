<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

use BubbleSorter\Item\AbstractItem;
use BubbleSorter\Swapper\SwapperInterface;

interface CollectionInterface extends \ArrayAccess, \Countable, SwapperInterface
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