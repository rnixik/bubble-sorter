<?php

namespace BubbleSorter\Comparer;

interface ComparerInterface
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
