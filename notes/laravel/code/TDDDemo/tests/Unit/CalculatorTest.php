<?php

namespace Tests\Unit;

use App\Math\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testDevideValidNumbers()
    {
        $calculator = new Calculator();

        $this->assertEquals(5.00, $calculator->divide(10, 2));
        $this->assertEquals(3.33, $calculator->divide(10, 3));
    }


    public function testDevideInValidNumbers()
    {
        $calculator = new Calculator();

        $this->assertEquals(0.00, $calculator->divide(10, 0));
    }

    /** @test */
    public function it_should_divide_valid_number()
    {
        $calculator = new Calculator();

        $this->assertEquals(5.00, $calculator->divide(10, 2));
        $this->assertEquals(3.33, $calculator->divide(10, 3));
    }


    /** @test */
    public function it_should_return_zero_when_the_divider_is_zero()
    {
        $calculator = new Calculator();

        $this->assertEquals(0.00, $calculator->divide(10, 0));
    }
}
