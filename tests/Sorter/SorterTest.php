<?php

namespace BubbleSorter\Tests\Sorter;

use BubbleSorter\Collection\Collection;
use BubbleSorter\Comparer\FloatComparer;
use BubbleSorter\Generator\Builder\Builder;
use BubbleSorter\Generator\Factory\IndexesGeneratorFactory;
use BubbleSorter\Item\FloatItem;
use BubbleSorter\Sorter\Sorter;
use BubbleSorter\Swapper\Swapper;
use PHPUnit\Framework\TestCase;

class SorterTest extends TestCase
{
    public function testSort()
    {
        $item1 = new FloatItem(3.0);
        $item2 = new FloatItem(9.0);
        $item3 = new FloatItem(5.0);
        $collection = new Collection($item1, $item2, $item3);

        $generatorFactory = new IndexesGeneratorFactory();
        $generatorBuilder = new Builder($generatorFactory);
        $comparer = new FloatComparer();
        $swapper = new Swapper();

        $sorter = new Sorter($generatorBuilder, $comparer, $swapper);
        $sortedCollection = $sorter->sort($collection);

        /** @var FloatItem $actual0 */
        $actual0 = $sortedCollection->get(0);
        /** @var FloatItem $actual1 */
        $actual1 = $sortedCollection->get(1);
        /** @var FloatItem $actual2 */
        $actual2 = $sortedCollection->get(2);

        $this->assertEquals(FloatItem::class, get_class($actual0));
        $this->assertEquals(FloatItem::class, get_class($actual1));
        $this->assertEquals(FloatItem::class, get_class($actual2));
        $this->assertEquals(FloatItem::class, get_class($actual0));

        $this->assertEquals(3.0, $actual0->getValue());
        $this->assertEquals(5.0, $actual1->getValue());
        $this->assertEquals(9.0, $actual2->getValue());
        $this->assertEquals(3, $collection->count());
    }
}
