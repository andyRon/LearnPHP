<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use Service\CalculateService;

class CalculateServiceTest extends TestCase
{
    public function testAbs()
    {
        $calculateService = new CalculateService();
        $this->assertEquals(4, $calculateService->abs(4));
    }
}