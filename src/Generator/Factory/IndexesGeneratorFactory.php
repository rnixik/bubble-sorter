<?php

declare(strict_types=1);

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\IndexesGenerator;
use BubbleSorter\Generator\GeneratorInterface;

final class IndexesGeneratorFactory implements FactoryInterface
{
    public function create(): GeneratorInterface
    {
        return new IndexesGenerator();
    }
}
