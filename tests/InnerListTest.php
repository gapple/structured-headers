<?php

namespace gapple\Tests\StructuredFields;

use gapple\StructuredFields\InnerList;
use PHPUnit\Framework\TestCase;

class InnerListTest extends TestCase
{
    public function testArrayAccess()
    {
        $item = new InnerList(
            [
                'Test Value One',
                'Test Value Two',
            ],
            (object) ['paramKey' => 'param value']
        );

        $this->assertEquals('Test Value One', $item->value[0]);
        $this->assertEquals('Test Value One', $item[0][0]);
        $this->assertEquals('param value', $item->parameters->paramKey);
        $this->assertEquals('param value', $item[1]->paramKey);
    }

    public function testIteration()
    {
        $list = new InnerList(
            [
                'Test Value One',
                'Test Value Two',
            ],
            (object) ['paramKey' => 'param value']
        );

        $this->assertIsIterable($list);

        $this->assertEquals(
            ['Test Value One', 'Test Value Two'],
            iterator_to_array($list)
        );
    }
}
