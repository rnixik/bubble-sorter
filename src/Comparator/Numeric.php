<?php

namespace BubbleSorter\Comparer;

final class Numeric implements ComparerInterface
{
    /**
     * @inheritdoc
     */
    public function isBigger(object $itemA, object $itemB): bool
    {
        return $itemA > $itemB;
    }
}
