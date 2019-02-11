<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

use BubbleSorter\Item\AbstractItem;

interface CollectionGetterInterface
{
    /**
     * Returns item from collection by index
     *
     * @param int $itemIndex
     * @return AbstractItem
     */
    public function get(int $itemIndex): AbstractItem;
}
