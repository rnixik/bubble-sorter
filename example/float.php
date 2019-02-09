<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BubbleSorter\Item\FloatItem;

$comparer = new \BubbleSorter\Comparer\FloatComparer();
$items = [
    new FloatItem(5),
    new FloatItem(1),
    new FloatItem(8),
    new FloatItem(12),
    new FloatItem(8),
];

$collection = new BubbleSorter\Collection\Collection($comparer, ...$items);

$generatorFactory = new BubbleSorter\Generator\Factory\Factory();
$generatorBuilder = new \BubbleSorter\Generator\Builder\Builder($generatorFactory);
$sorter = new \BubbleSorter\Sorter\Sorter($generatorBuilder);
$sortedCollection = $sorter->sort($collection);

print_r($sortedCollection);
