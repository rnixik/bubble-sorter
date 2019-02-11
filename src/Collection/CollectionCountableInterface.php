<?php

declare(strict_types=1);

namespace BubbleSorter\Collection;

interface CollectionCountableInterface
{
    /**
     * Returns number of items in collection
     *
     * @return int
     */
    public function count(): int;
}
