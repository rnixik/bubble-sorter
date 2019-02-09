<?php

declare(strict_types=1);

namespace BubbleSorter\Generator\Factory;

use BubbleSorter\Generator\GeneratorInterface;

interface FactoryInterface
{
    /**
     * Returns empty instance of generator
     *
     * @return GeneratorInterface
     */
    public function create(): GeneratorInterface;
}
