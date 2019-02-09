<?php

declare(strict_types=1);

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\CollectionGenerator;
use BubbleSorter\Generator\GeneratorInterface;

final class Factory implements FactoryInterface
{
    public function create(): GeneratorInterface
    {
        return new CollectionGenerator();
    }
}
