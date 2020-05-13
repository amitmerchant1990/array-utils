<?php

namespace Amitmerchant\ArrayUtils\Tests;

use PHPUnit\Framework\TestCase;
use Amitmerchant\ArrayUtils\ArrayUtils;

class ArrayUtilsTest extends TestCase
{
    /** @test */
    public function it_successfully_maps_array()
    {
        $this->assertEquals([2, 4, 6, 8], ArrayUtils::getInstance()
            ->collect([1, 2, 3, 4])
            ->map(function($iteration) {
                return $iteration * 2;
            }));
    }

    /** @test */
    public function it_successfully_filters_array()
    {
        $this->assertEqualsCanonicalizing([1, 3, 5], ArrayUtils::getInstance()
            ->collect([1, 2, 3, 4, 5])
            ->filter(function($iteration) {
                return ($iteration & 1);
            }));
    }

    /** @test */
    public function it_successfully_checks_contains()
    {
        $this->assertTrue(ArrayUtils::getInstance()->collect(['red', 'green', 'blue'])->contains('green'));
        $this->assertFalse(ArrayUtils::getInstance()->collect(['red', 'green', 'blue'])->contains('pink'));
    }

    /** @test */
    public function it_successfully_gets_array_values()
    {
        $user = [
            'Name' => 'Peter',
            'Age'=> '41',
            'Country' => 'USA'
        ];

        $this->assertEquals(['Peter', '41', 'USA'], ArrayUtils::getInstance()->collect($user)->getValues());
    }
}
