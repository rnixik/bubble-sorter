<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

use BubbleSorter\Item\AbstractItem;

interface CollectionSetterInterface
{
    /**
     * Sets item to collection with index
     *
     * @param int $itemIndex
     * @param AbstractItem $item
     * @return CollectionInterface
     */
    public function set(int $itemIndex, AbstractItem $item): CollectionInterface;
}
