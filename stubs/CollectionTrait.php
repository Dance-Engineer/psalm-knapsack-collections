<?php

namespace DusanKasan\Knapsack;

use DusanKasan\Knapsack\Exceptions\InvalidReturnValue;

/**
 * @template TKey as array-key
 * @template TValue
 */
trait CollectionTrait
{
    /**
     * @return array<TKey, TValue>
     */
    public function toArray()
    {
    }

    /**
     * @param callable(TValue, TKey=):bool|null $function
     * @return Collection<TKey, TValue>
     */
    public function filter(callable $function = null)
    {
    }

    /**
     * @return Collection<TKey, TValue>
     */
    public function distinct()
    {
    }

    /**
     * @param iterable<T> ...$collections
     * @return Collection<TKey|int, T|TValue>
     */
    public function concat(...$collections)
    {
    }

    /**
     * @param callable(TValue, TKey=):T $function
     * @return Collection<TKey, T>
     */
    public function map(callable $function)
    {
    }

    /**
     * @param callable(T, TValue, TKey):T $function
     * @param T $starTValue
     * @param bool $convertToCollection
     * @return T|Collection<mixed, mixed>
     */
    public function reduce(callable $function, $starTValue, $convertToCollection = false)
    {
    }

    /**
     * @param int $depth
     * @return Collection<mixed, mixed>
     */
    public function flatten($depth = -1)
    {
    }

    /**
     * @param callable(TValue, TValue, TKey=, TKey=):int $function
     * @return Collection<TKey, TValue>
     */
    public function sort(callable $function)
    {
    }

    /**
     * @param int $from
     * @param int $to If omitted, will slice until end
     * @return Collection<TKey, TValue>
     */
    public function slice($from, $to = -1)
    {
    }

    /**
     * @param callable(TValue, TKey=):T $function ($value, $key)
     * @return Collection<T, Collection<TKey, TValue>>
     */
    public function groupBy(callable $function)
    {
    }

    /**
     * @param mixed $key
     * @return Collection<mixed, Collection<TKey, TValue>>
     */
    public function groupByKey($key)
    {
    }

    /**
     * @param callable(TValue, TKey=): void $function
     * @return Collection<TKey, TValue>
     */
    public function each(callable $function)
    {
    }

    /**
     * @return int
     */
    public function size()
    {
    }

    /**
     * @param TKey $key
     * @param bool $convertToCollection
     * @return TValue|Collection
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function get($key, $convertToCollection = false)
    {
    }

    /**
     * @param TKey $key
     * @param T $default
     * @param bool $convertToCollection
     * @return T|TValue|Collection<mixed, mixed>
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function getOrDefault($key, $default = null, $convertToCollection = false)
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @param mixed|null $default
     * @param bool $convertToCollection
     * @return mixed|Collection<mixed, mixed>
     */
    public function find(callable $function, $default = null, $convertToCollection = false)
    {
    }

    /**
     * Returns a non-lazy collection of items whose keys are the return values of $function and values are the number of
     * items in this collection for which the $function returned this value.
     *
     * @param callable(TValue, TKey=):T $function
     * @return Collection<T, int>
     */
    public function countBy(callable $function)
    {
    }

    /**
     * @param callable(TValue, TKey=):T $function
     * @return Collection<T, TValue>
     */
    public function indexBy(callable $function)
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @return bool
     */
    public function every(callable $function)
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @return bool
     */
    public function some(callable $function)
    {
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public function contains($value)
    {
    }

    /**
     * @return Collection<TKey, TValue>
     */
    public function reverse()
    {
    }

    /**
     * @param callable(T, TValue):T $function
     * @param T $starTValue
     * @param bool $convertToCollection
     * @return T|Collection<mixed, mixed>
     */
    public function reduceRight(callable $function, $starTValue, $convertToCollection = false)
    {
    }

    /**
     * @param int $numberOfItems
     * @return Collection<TKey, TValue>
     */
    public function take($numberOfItems)
    {
    }

    /**
     * @param int $numberOfItems
     * @return Collection<TKey, TValue>
     */
    public function drop($numberOfItems)
    {
    }

    /**
     * @return Collection<int, TValue>
     */
    public function values()
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @return Collection<TKey, TValue>
     */
    public function reject(callable $function)
    {
    }

    /**
     * @return Collection<int, TKey>
     */
    public function keys()
    {
    }

    /**
     * @param mixed $separator
     * @return Collection<mixed, mixed>
     */
    public function interpose($separator)
    {
    }

    /**
     * @param int $numberOfItems
     * @return Collection<TKey, TValue>
     */
    public function dropLast($numberOfItems = 1)
    {
    }

    /**
     * @param iterable<mixed> ...$collections
     * @return Collection<mixed, mixed>
     */
    public function interleave(...$collections)
    {
    }

    /**
     * @return Collection<TKey, TValue>
     */
    public function cycle()
    {
    }

    /**
     * @param mixed $value
     * @param mixed|null $key
     * @return Collection<mixed, mixed>
     */
    public function prepend($value, $key = null)
    {
    }

    /**
     * @param mixed $value
     * @param mixed $key
     * @return Collection<mixed, mixed>
     */
    public function append($value, $key = null)
    {
    }

    /**
     * Returns a lazy collection by removing items from this collection until first item for which $function returns
     * false.
     *
     * @param callable(TValue, TKey=): bool $function
     * @return Collection<TKey, TValue>
     */
    public function dropWhile(callable $function)
    {
    }

    /**
     * @param callable(TValue, TKey=):T $function
     * @return Collection<mixed, mixed>
     */
    public function mapcat(callable $function)
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @return Collection<TKey, TValue>
     */
    public function takeWhile(callable $function)
    {
    }

    /**
     * @param int $position
     * @return Collection<int, Collection<TKey, TValue>>
     */
    public function splitAt($position)
    {
    }

    /**
     * @param callable(TValue, TKey=):bool $function
     * @return Collection<int, Collection<TKey, TValue>>
     */
    public function splitWith(callable $function)
    {
    }

    /**
     * @param iterable<TValue, mixed> $replacementMap
     * @return Collection<TKey, mixed>
     */
    public function replace($replacementMap)
    {
    }

    /**
     * @param callable(T, TValue):T $function
     * @param T $starTValue
     * @param callable $function
     * @param mixed $starTValue
     * @return Collection<int, T>
     */
    public function reductions(callable $function, $starTValue)
    {
    }

    /**
     * @param int $step
     * @return Collection<TKey, TValue>
     */
    public function takeNth($step)
    {
    }

    /**
     * @return Collection<TKey, TValue>
     */
    public function shuffle()
    {
    }

    /**
     * @param int $numberOfItems
     * @param int $step
     * @param iterable $padding
     * @return Collection<mixed, mixed>
     */
    public function partition($numberOfItems, $step = 0, $padding = [])
    {
    }

    /**
     * @param callable(TKey=,TValue=):bool $function
     * @return Collection{0:Collection<TKey,TValue>,1:Collection<TKey,TValue>}
     */
    public function partitionBy(callable $function)
    {
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
    }

    /**
     * @return bool
     */
    public function isNotEmpty()
    {
    }

    /**
     * @return Collection<TValue, int>
     */
    public function frequencies()
    {
    }

    /**
     * @param bool $convertToCollection
     * @return mixed|Collection<mixed, mixed>
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function first($convertToCollection = false)
    {
    }

    /**
     * @param bool $convertToCollection
     * @return TValue|Collection <mixed, mixed>
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function last($convertToCollection = false)
    {
    }

    /**
     * @return Collection<TKey, TValue>
     */
    public function realize()
    {
    }

    /**
     * @param bool $convertToCollection
     * @return TValue|Collection<mixed, mixed>
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function second($convertToCollection = false)
    {
    }

    /**
     * @param iterable<T> $collection
     * @return Collection<T, TValue>
     * @throws \DusanKasan\Knapsack\Exceptions\ItemNotFound
     */
    public function combine($collection)
    {
    }

    /**
     * @param iterable<TKey> $keys
     * @return Collection<TKey, TValue>
     */
    public function except($keys)
    {
    }

    /**
     * @param iterable<TKey> $keys
     * @return Collection<TKey, TValue>
     */
    public function only($keys)
    {
    }

    /**
     * @param iterable<TValue> ...$collections
     * @return Collection<TKey, TValue>
     */
    public function diff(...$collections)
    {
    }

    /**
     * @return Collection<TValue, TKey>
     */
    public function flip()
    {
    }

    /**
     * @param TKey $key
     * @return bool
     */
    public function has($key)
    {
    }

    /**
     * @param iterable<mixed> ...$collections
     * @return Collection<int, mixed>
     */
    public function zip(...$collections)
    {
    }

    /**
     * @param callable(Collection<TKey, TValue>):Collection<Ta, Tb> $transformer
     * @return Collection<Ta, Tb>
     * @throws InvalidReturnValue
     */
    public function transform(callable $transformer)
    {
    }

    /**
     * @return Collection<mixed, Collection<TKey, mixed>>
     */
    public function transpose()
    {
    }

    /**
     * @param mixed $keyPath
     * @return Collection<mixed, mixed>
     */
    public function extract($keyPath)
    {
    }

    /**
     * @param iterable<TValue> ...$collections
     * @return Collection<TKey, TValue>
     */
    public function intersect(...$collections)
    {
    }

    /**
     * @param int $size
     * @return bool
     */
    public function sizeIs($size)
    {
    }

    /**
     * @param int $size
     * @return bool
     */
    public function sizeIsLessThan($size)
    {
    }

    /**
     * @param int $size
     * @return bool
     */
    public function sizeIsGreaterThan($size)
    {
    }

    /**
     * @param int $fromSize
     * @param int $toSize
     * @return bool
     */
    public function sizeIsBetween($fromSize, $toSize)
    {
    }

    /**
     * @return int|float
     */
    public function sum()
    {
    }

    /**
     * @return int|float
     */
    public function average()
    {
    }

    /**
     * @return TValue
     */
    public function max()
    {
    }

    /**
     * @return TValue
     */
    public function min()
    {
    }

    /**
     * @return string
     */
    public function toString()
    {
    }

    /**
     * @param iterable<TKey, mixed> $replacementMap
     * @return Collection<TKey, mixed>
     */
    public function replaceByKeys($replacementMap)
    {
    }

    /**
     * @param int|null $maxItemsPerCollection
     * @param int|null $maxDepth
     * @return array<TKey, mixed>
     */
    public function dump($maxItemsPerCollection = null, $maxDepth = null)
    {
    }

    /**
     * @param int|null $maxItemsPerCollection
     * @param int|null $maxDepth
     * @return Collection<TKey, TValue>
     */
    public function printDump($maxItemsPerCollection = null, $maxDepth = null)
    {
    }

}
