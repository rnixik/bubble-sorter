<?php

declare(strict_types=1);

namespace BubbleSorter\Sorter;

use BubbleSorter\Collection\CollectionInterface;
use BubbleSorter\Comparer\ComparerInterface;
use BubbleSorter\Generator\Builder\BuilderInterface;
use BubbleSorter\Generator\DirectionEnum;
use BubbleSorter\Swapper\SwapperInterface;

final class Sorter implements SorterInterface
{
    /** @var BuilderInterface */
    private $generatorBuilder;

    /** @var ComparerInterface */
    private $comparer;

    /** @var SwapperInterface */
    private $swapper;

    public function __construct(
        BuilderInterface $generatorBuilder,
        ComparerInterface $comparer,
        SwapperInterface $swapper
    ) {
        $this->generatorBuilder = $generatorBuilder;
        $this->comparer = $comparer;
        $this->swapper = $swapper;
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
                $itemA = $sortedCollection->get($j + 1);
                $itemB = $sortedCollection->get($j);
                if (!$this->comparer->isBigger($itemA, $itemB)) {
                    $sortedCollection = $this->swapper->swap($sortedCollection, $j + 1, $j);
                }
            }
        }

        return $sortedCollection;
    }
}
