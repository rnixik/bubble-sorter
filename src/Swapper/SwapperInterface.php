<?php

namespace BubbleSorter\Swapper;

interface SwapperInterface
{
    public function swap(int $indexA, int $indexB): void;
}
