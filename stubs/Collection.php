<?php

namespace DusanKasan\Knapsack;

use ArrayIterator;
use DusanKasan\Knapsack\Exceptions\InvalidArgument;
use DusanKasan\Knapsack\Exceptions\InvalidReturnValue;
use IteratorAggregate;
use Traversable;

/**
 * @template TKey as array-key
 * @template TValue
 *
 * @template-extends IteratorAggregate<TKey,TValue>
 */
class Collection implements IteratorAggregate, \Serializable
{
    use CollectionTrait;

    /**
     * @var Traversable<Tkey, TValue>
     */
    protected $input;

    /**
     * @var callable():(array<Tkey, TValue>|Traversable<Tkey, TValue>)
     */
    private $inputFactory;

    /**
     * @param callable():(array<Tkey, TValue>|Traversable<Tkey, TValue>)|array<Tkey, TValue>|Traversable<Tkey, TValue> $input
     */
    public function __construct($input)
    {
    }

    /**
     * @param callable():(array<Tkey, TValue>|Traversable<Tkey, TValue>)|array<Tkey, TValue>|Traversable<Tkey, TValue> $input
     * @return Collection<Tkey, TValue>
     */
    public static function from($input)
    {
    }

    /**
     * @param T $input
     * @param callable(T):TValue $function
     * @return Collection<Tkey, TValue>
     */
    public static function iterate($input, callable $function)
    {
    }

    /**
     * @param Tvalue $value
     * @param int $times
     * @return Collection<Tkey, TValue>
     */
    public static function repeat($value, $times = -1)
    {
    }

    /**
     * @param int $start
     * @param int|null $end
     * @param int $step
     * @return Collection<Tkey, int>
     */
    public static function range($start = 0, $end = null, $step = 1)
    {
    }

    /**
     * {@inheritdoc}
     * @throws InvalidReturnValue
     */
    public function getIterator()
    {
    }

    public function serialize()
    {
    }

    public function unserialize($serialized)
    {
    }
}
