<?php

declare(strict_types=1);

namespace BubbleSorter\Item;

final class FloatItem extends AbstractItem
{
    /** @var float */
    private $value;

    public function __construct(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
}
