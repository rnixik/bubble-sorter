<?php

require_once __DIR__ . '/../vendor/autoload.php';

$comparer = new \BubbleSorter\Comparer\FloatComparer();
$floatItemsCreator = new \BubbleSorter\Item\Creator\FloatCreator();
$floatItemsArrayCreator = new \BubbleSorter\Item\Creator\FloatArrayCreator($floatItemsCreator);
$items = $floatItemsArrayCreator->createFromArray(...[5, 8, 3, 12, 3]);

$collection = new BubbleSorter\Collection\Collection($comparer, ...$items);

$generatorFactory = new BubbleSorter\Generator\Factory\Factory();
$generatorBuilder = new \BubbleSorter\Generator\Builder\Builder($generatorFactory);
$sorter = new \BubbleSorter\Sorter\Sorter($generatorBuilder);
$sortedCollection = $sorter->sort($collection);

print_r($sortedCollection);
