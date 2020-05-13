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
     * @return mixed
     */
    public function map(Closure $closure)
    {
        return array_map($closure, $this->collection);
    }

    /**
     * Wrapper method for array_filter
     *
     * @param Closure $closure
     * @return array
     */
    public function filter(Closure $closure)
    {
        return array_filter($this->collection, $closure);
    }

    /**
     * Wrapper method for in_array
     *
     * @param $item
     * @return bool
     */
    public function contains($item): bool
    {
        return in_array($item, $this->collection);
    }

    /**
     * Wrapper method for array_values
     *
     * @return array
     */
    public function getValues()
    {
        return array_values($this->collection);
    }

    /**
     * Wrapper method for array_keys
     *
     * @return array
     */
    public function getKeys()
    {
        return array_keys($this->collection);
    }

    /**
     * Wrapper method for array_search
     *
     * @param string $searchParam
     * @return false|int|string
     */
    public function search(string $searchParam)
    {
        return array_search($searchParam, $this->collection);
    }
}
