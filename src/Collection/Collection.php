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
    public function isBigger(AbstractItem $itemA, AbstractItem $itemB): bool
    {
        return $this->comparer->isBigger($itemA, $itemB);
    }

    /**
     * @inheritdoc
     */
    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    /**
     * @inheritdoc
     */
    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    /**
     * @inheritdoc
     */
    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = $value;
    }

    /**
     * @inheritdoc
     */
    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @inheritdoc
     */
    public function swap(int $indexA, int $indexB): void
    {
        $elementA = $this->items[$indexA];
        $elementB = $this->items[$indexB];
        $this->items[$indexA] = $elementB;
        $this->items[$indexB] = $elementA;
    }
}
