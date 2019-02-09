<?php

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\CollectionGenerator;

final class Factory implements FactoryInterface
{
    public function create(): CollectionGenerator
    {
        return new CollectionGenerator();
    }
}
