<?php

namespace AmitMerchant;

class ArrayUtils
{
    public $collection;

    public static function getInstance()
    {
        return new ArrayUtils();
    }

    public function collect(array $collection)
    {
        $this->collection = $collection;

        return $this;
    }

    public function map(\Closure $closure)
    {
        return array_map($closure, $this->collection);
    }

    public function filter(\Closure $closure)
    {
        return array_filter($this->collection, $closure);
    }

    public function contains($item): bool
    {
        return in_array($item, $this->collection);
    }

    public function getValues()
    {
        return array_values($this->collection);
    }

    public function getKeys()
    {
        return array_keys($this->collection);
    }

    public function search(string $searchParam)
    {
        return array_search($searchParam, $this->collection);
    }
}
