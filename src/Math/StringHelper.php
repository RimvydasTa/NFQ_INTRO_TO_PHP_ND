<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 10/13/2018
 * Time: 14:53
 */

namespace Math;


use MathPHP\Sequence\Basic;

class NumberHelper
{
    public static function addNumbers ($a, $b){
        return $a + $b;
    }

    public static function divideNumbers($a, $b)
    {
        return $a / $b;
    }

    public static function sumDigits ($numbers)
    {
       $factorialNumbers = Basic::digitSum($numbers);

        print_r($factorialNumbers);
    }
}