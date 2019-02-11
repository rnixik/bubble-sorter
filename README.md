# Bubble sorter

A library which can sort items using bubble sort. 
Written with OOP, SOLID and love.

## Sorting

```php
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
