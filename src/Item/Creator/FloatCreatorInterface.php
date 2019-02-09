<?php

declare(strict_types=1);

namespace BubbleSorter\Item\Creator;

use BubbleSorter\Item\FloatItem;

interface FloatCreatorInterface
{
    /**
     * Creates item from float
     *
     * @param float $value
     * @return FloatItem
     */
    public function create(float $value): FloatItem;
}
