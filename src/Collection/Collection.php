<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

use BubbleSorter\Item\AbstractItem;

final class Collection implements CollectionInterface
{
    /** @var AbstractItem[] */
    private $items;

    public function __construct(AbstractItem ...$items)
    {
        $this->items = $items;
    }

    /**
     * @inheritdoc
     */
    public function get(int $itemIndex): AbstractItem
    {
        return $this->items[$itemIndex];
    }

    /**
     * @inheritdoc
     */
    public function set(int $itemIndex, AbstractItem $item): CollectionInterface
    {
        $items = $this->items;
        $items[$itemIndex] = $item;
        return new Collection(...$items);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->items);
    }
}
