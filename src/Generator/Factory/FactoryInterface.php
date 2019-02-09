<?php

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\CollectionGenerator;

interface FactoryInterface
{
    /**
     * Returns empty instance of generator
     *
     * @return CollectionGenerator
     */
    public function create(): CollectionGenerator;
}
