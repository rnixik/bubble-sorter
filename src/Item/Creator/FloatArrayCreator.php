<?php

declare(strict_types=1);

namespace BubbleSorter\Item\Creator;

use BubbleSorter\Item\FloatItem;

class FloatArrayCreator
{
    /** @var FloatCreatorInterface */
    private $floatCreator;

    public function __construct(FloatCreatorInterface $floatCreator)
    {
        $this->floatCreator = $floatCreator;
    }

    /**
     * @param float ...$floats
     * @return FloatItem[]
     */
    public function createFromArray(float ...$floats): array
    {
        $arrayOfItems = [];
        foreach ($floats as $float) {
            $arrayOfItems[] = $this->floatCreator->create($float);
        }

        return $arrayOfItems;
    }
}
