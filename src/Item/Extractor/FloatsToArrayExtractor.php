<?php

namespace BubbleSorter\Item\Extractor;

use BubbleSorter\Collection\CollectionInterface;
use BubbleSorter\Generator\Builder\BuilderInterface;
use BubbleSorter\Generator\DirectionEnum;
use BubbleSorter\Item\FloatItem;

class FloatsToArrayExtractor implements ItemsToArrayExtractorInterface
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
    public function extract(CollectionInterface $sortedCollection): array
    {
        $itemsAsArray = [];
        $generator = $this->generatorBuilder->build($sortedCollection);
        $items = $generator->generate(0, $sortedCollection->count() - 1, DirectionEnum::FORWARD);
        foreach ($items as $item) {
            if ($item instanceof FloatItem) {
                $itemsAsArray[] = $item->getValue();
            }
        }

        return $itemsAsArray;
    }
}
