<?php

namespace gapple\StructuredFields;

class InnerList implements TupleInterface, \IteratorAggregate
{
    use TupleTrait;

    public function __construct($value, ?object $parameters = null)
    {
        $this->value = $value;
        $this->parameters = $parameters;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->value);
    }
}
