<?php

declare(strict_types=1);

namespace BubbleSorter\Comparer;

use BubbleSorter\Item\AbstractItem;
use BubbleSorter\Item\FloatItem;

final class FloatComparer implements ComparerInterface
{
    /**
     * Compares two items
     *
     * @param AbstractItem $itemA
     * @param AbstractItem $itemB
     * @return bool return true if $itemA is bigger than $itemB
     */
    public function isBigger(AbstractItem $itemA, AbstractItem $itemB): bool
    {
        if (!($itemA instanceof FloatItem)) {
            throw new \LogicException("ItemA is not an FloatItem");
        }
        if (!($itemB instanceof FloatItem)) {
            throw new \LogicException("ItemB is not an FloatItem");
        }

        return $itemA->getValue() > $itemB->getValue();
    }
}
