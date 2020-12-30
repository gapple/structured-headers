<?php

namespace gapple\StructuredFields;

class Item implements TupleInterface
{
    use TupleTrait;

    public function __construct($value, ?object $parameters = null)
    {
        $this->value = $value;
        $this->parameters = $parameters;
    }
}
