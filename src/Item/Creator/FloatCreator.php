<?php

declare(strict_types=1);

namespace BubbleSorter\Item\Creator;

use BubbleSorter\Item\FloatItem;

class FloatCreator implements FloatCreatorInterface
{
    public function create(float $value): FloatItem
    {
        return new FloatItem($value);
    }
}
