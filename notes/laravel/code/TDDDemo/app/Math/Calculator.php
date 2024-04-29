<?php

namespace App\Math;

class Calculator
{
    public function divide(float $n1, float $n2): float
    {
//        if ($n2 == 0) {
//            return 0;
//        }
//        return round($n1 / $n2, 2);

        try {
            return round($n1 / $n2, 2);
        } catch (\DivisionByZeroError) {
            return 0;
        }
    }
}
