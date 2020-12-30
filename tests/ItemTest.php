<?php

namespace gapple\Tests\StructuredFields;

use gapple\StructuredFields\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testArrayAccess()
    {
        $item = new Item('Test Value', (object) ['paramKey' => 'param value']);

        $this->assertEquals('Test Value', $item->value);
        $this->assertEquals('Test Value', $item[0]);
        $this->assertEquals('param value', $item->parameters->paramKey);
        $this->assertEquals('param value', $item[1]->paramKey);
    }
}
