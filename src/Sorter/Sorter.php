<?php

declare(strict_types=1);

namespace BubbleSorter\Sorter;

use BubbleSorter\Collection\CollectionInterface;
use BubbleSorter\Generator\Builder\BuilderInterface;
use BubbleSorter\Generator\DirectionEnum;

final class Sorter implements SorterInterface
{
    /** @var BuilderInterface */
    private $generatorBuilder;

    public function __construct(BuilderInterface $generatorBuilder)
    {
        $this->generatorBuilder = $generatorBuilder;
    }

    /**
     * @inheritdoc
     */
    public function sort(CollectionInterface $collection): CollectionInterface
    {
        $sortedCollection = clone $collection;
        $generator = $this->generatorBuilder->build($sortedCollection);
        $iItems = $generator->generate($sortedCollection->count() - 1, 0, DirectionEnum::BACKWARD);
        foreach ($iItems as $i => $_) {
            $jItems = $generator->generate(0, $i - 1, DirectionEnum::FORWARD);
            foreach ($jItems as $j => $item) {
                $itemA = $sortedCollection->offsetGet($j + 1);
                $itemB = $sortedCollection->offsetGet($j);
                if (!$sortedCollection->isBigger($itemA, $itemB)) {
                    $sortedCollection->swap($j + 1, $j);
                }
            }
        }

        return $sortedCollection;
    }
}