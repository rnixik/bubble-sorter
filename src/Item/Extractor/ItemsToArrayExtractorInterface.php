<?php

namespace BubbleSorter\Item\Extractor;

use BubbleSorter\Collection\CollectionInterface;

interface ItemsToArrayExtractorInterface
{
    /**
     * Extracts items as array
     *
     * @param CollectionInterface $sortedCollection
     * @return array
     */
    public function extract(CollectionInterface $sortedCollection): array;
}
