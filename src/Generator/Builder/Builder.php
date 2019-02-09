<?php

namespace BubbleSorter\Generator\Builder;

use BubbleSorter\Collection\CollectionInterface;
use BubbleSorter\Generator\Factory\FactoryInterface;
use BubbleSorter\Generator\GeneratorInterface;

final class Builder implements BuilderInterface
{
    /** @var FactoryInterface */
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @inheritdoc
     */
    public function build(CollectionInterface $collection): GeneratorInterface
    {
        $generator = $this->factory->create();
        $generator->setCollection($collection);
        return $generator;
    }
}
