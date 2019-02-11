<?php

require_once __DIR__ . '/../vendor/autoload.php';

$floatsToSort = [5, 8, 3, 12, 3];

$comparer = new \BubbleSorter\Comparer\FloatComparer();
$floatItemsCreator = new \BubbleSorter\Item\Creator\FloatCreator();
$floatItemsFromListCreator = new \BubbleSorter\Item\Creator\FloatsFromListCreator($floatItemsCreator);
$items = $floatItemsFromListCreator->createFromList(...$floatsToSort);

$collection = new \BubbleSorter\Collection\Collection(...$items);

$generatorFactory = new \BubbleSorter\Generator\Factory\Factory();
$generatorBuilder = new \BubbleSorter\Generator\Builder\Builder($generatorFactory);
$comparer = new \BubbleSorter\Comparer\FloatComparer();
$swapper = new \BubbleSorter\Swapper\Swapper();
$sorter = new \BubbleSorter\Sorter\Sorter($generatorBuilder, $comparer, $swapper);
$sortedCollection = $sorter->sort($collection);

$extractor = new \BubbleSorter\Item\Extractor\FloatsToArrayExtractor($generatorBuilder);
$sortedFloats = $extractor->extract($sortedCollection);

print_r($sortedFloats);
