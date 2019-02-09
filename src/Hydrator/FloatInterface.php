<?php

declare(strict_types=1);

namespace BubbleSorter\Hydrator;

use BubbleSorter\Item\FloatItem;

interface FloatInterface
{
    public function extract(FloatItem $item): float;

    public function hydrate(float $value): FloatItem;
}
