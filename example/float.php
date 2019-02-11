<?php

require_once __DIR__ . '/../vendor/autoload.php';

$floatsToSort = [5, 8, 3, 12, 3];

$comparer = new \BubbleSorter\Comparer\FloatComparer();
$floatItemsCreator = new \BubbleSorter\Item\Creator\FloatCreator();
$floatItemsFromListCreator = new \BubbleSorter\Item\Creator\FloatsFromListCreator($floatItemsCreator);
$items = $floatItemsFromListCreator->createFromList(...$floatsToSort);

$collection = new \BubbleSorter\Collection\Collection(...$items);

$indexesGeneratorFactory = new \BubbleSorter\Generator\Factory\IndexesGeneratorFactory();
$indexesGeneratorBuilder = new \BubbleSorter\Generator\Builder\Builder($indexesGeneratorFactory);
$comparer = new \BubbleSorter\Comparer\FloatComparer();
$swapper = new \BubbleSorter\Swapper\Swapper();
$sorter = new \BubbleSorter\Sorter\Sorter($indexesGeneratorBuilder, $comparer, $swapper);
$sortedCollection = $sorter->sort($collection);

$itemsGeneratorFactory = new \BubbleSorter\Generator\Factory\ItemsGeneratorFactory();
$itemsGeneratorBuilder = new \BubbleSorter\Generator\Builder\Builder($itemsGeneratorFactory);
$extractor = new \BubbleSorter\Item\Extractor\FloatsToArrayExtractor($itemsGeneratorBuilder);
$sortedFloats = $extractor->extract($sortedCollection);

print_r($sortedFloats);
