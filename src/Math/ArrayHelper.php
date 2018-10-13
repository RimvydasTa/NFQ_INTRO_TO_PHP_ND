<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 10/13/2018
 * Time: 14:48
 */

declare(strict_types=1);

namespace Math;
use MathPHP\Functions\Map\Single;


class ArrayHelper
{
    /**
     * @param int[] $numArray
     * @return array
     */
    public static function squareArray(array $numArray): array {
        $x = Single::square($numArray);

        return $x;
    }

    /**
     * @param array $arr
     */
    public static function printArray (array $arr){
        print_r($arr);
    }
}