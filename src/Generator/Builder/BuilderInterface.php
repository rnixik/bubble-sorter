<?php

declare(strict_types=1);

namespace BubbleSorter\Generator\Builder;

use BubbleSorter\Collection\CollectionInterface;
use BubbleSorter\Generator\GeneratorInterface;

interface BuilderInterface
{
    /**
     * Build a generator for collection
     *
     * @param CollectionInterface $collection
     * @return GeneratorInterface
     */
    public function build(CollectionInterface $collection): GeneratorInterface;
}
