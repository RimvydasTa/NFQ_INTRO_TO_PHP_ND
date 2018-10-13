<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 10/13/2018
 * Time: 14:49
 */

require "vendor/autoload.php";
use Math\ArrayHelper;
use Math\NumberHelper;



$number_arr = [1,2,3,4,5,6,7,8,9,10];
$numbers = "12,14,15,16";

//Uncomment to see type Error
//$squaredArray = ArrayHelper::squareArray($numbers);  //Throws error for bad passed type
$squaredArray = ArrayHelper::squareArray($number_arr); //Everything works correct since passed parameter is an array

ArrayHelper::printArray($squaredArray);

//Without strict_types code runs or we only get a warning even though strings are passed to the function
//instead of integers
NumberHelper::addNumbers('1', '2');
NumberHelper::divideNumbers('a', '3');