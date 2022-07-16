<?php

namespace Amitmerchant\ArrayUtils;

use Closure;

class ArrayUtils
{
    private $collection;

    /**
     * Returns the class instance
     *
     * @return \AmitMerchant\ArrayUtils\ArrayUtils
     */
    public static function getInstance()
    {
        return new ArrayUtils();
    }

    /**
     * Collects the input array
     *
     * @param array $collection
     * @return $this
     */
    public function collect(array $collection)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * Wrapper method for array_map
     *
     * @param Closure $closure
     * @return array
     */
    public function map(Closure $closure): array
    {
        return array_map($closure, $this->collection);
    }

    /**
     * Wrapper method for array_filter
     *
     * @param Closure $closure
     * @return array
     */
    public function filter(Closure $closure): array
    {
        return array_filter($this->collection, $closure);
    }

    /**
     * Wrapper method for in_array
     *
     * @param mixed $item
     * @return bool
     */
    public function contains(mixed $item): bool
    {
        return in_array($item, $this->collection);
    }

    /**
     * Wrapper method for array_values
     *
     * @return array
     */
    public function getValues(): array
    {
        return array_values($this->collection);
    }

    /**
     * Wrapper method for array_keys
     *
     * @return array
     */
    public function getKeys(): array
    {
        return array_keys($this->collection);
    }

    /**
     * Wrapper method for array_search
     *
     * @param mixed $searchParam
     * @return false|int|string
     */
    public function search(mixed $searchParam, bool $strict = false): int|string|false
    {
        return array_search($searchParam, $this->collection, $strict = false);
    }

    /**
     * Wrapper method for array_reduce
     *
     * @param Closure $callback
     * @param mixed $initial
     * 
     * @return mixed
     */
    public function reduce(Closure $callback, mixed $initial = null): mixed
    {
        return array_reduce($this->collection, $callback, $initial);
    }

    /**
     * Wrapper method for array_chunk
     *
     * @param int $length
     * @param bool $preserve_keys
     * 
     * @return array
     */
    public function chunk(int $length, bool $preserve_keys = false): array
    {
        return array_chunk($this->collection, $length, $preserve_keys);
    }
}
