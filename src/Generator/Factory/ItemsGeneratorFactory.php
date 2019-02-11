<?php

declare(strict_types=1);

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\GeneratorInterface;
use BubbleSorter\Generator\ItemsGenerator;

final class ItemsGeneratorFactory implements FactoryInterface
{
    public function create(): GeneratorInterface
    {
        return new ItemsGenerator();
    }
}
