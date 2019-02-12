# Bubble sorter

A library which can sort items using bubble sort. 
Written with OOP, SOLID and love.

[![Build Status][ico-travis]][link-travis]

## Sorting

```php
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

```

outputs

```
Array
(
    [0] => 3
    [1] => 3
    [2] => 5
    [3] => 8
    [4] => 12
)
```

See examples in `example` directory.

## Tests

Work is in progress.

## License

The MIT License

[ico-travis]: https://img.shields.io/travis/rnixik/bubble-sorter/master.svg?style=flat-square

[link-travis]: https://travis-ci.org/rnixik/bubble-sorter
