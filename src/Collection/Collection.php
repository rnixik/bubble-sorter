<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

use BubbleSorter\Comparer\ComparerInterface;
use BubbleSorter\Item\AbstractItem;

final class Collection implements CollectionInterface
{
    /** @var ComparerInterface */
    private $comparer;

    /** @var AbstractItem[] */
    private $items;

    public function __construct(ComparerInterface $comparer, AbstractItem ...$items)
    {
        $this->comparer = $comparer;
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
        return new Collection($this->comparer, ...$items);
    }

    /**
     * @inheritdoc
     */
    public function count(): int
    {
        return count($this->items);
    }
}
