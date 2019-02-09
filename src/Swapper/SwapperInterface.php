<?php

declare(strict_types=1);

namespace BubbleSorter\Swapper;

interface SwapperInterface
{
    public function swap(int $indexA, int $indexB): void;
}
