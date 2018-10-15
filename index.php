<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 10/13/2018
 * Time: 14:49
 */

require "vendor/autoload.php";

use App\ArrayHelper;
use App\StringHelper;


//WITH STRICT TYPES =====

$number_arr = [1,2,3,4,5,6,7,8,9,10];
$numbers = "12,14,15,16";

//Uncomment to see type Error
//$squaredArray = ArrayHelper::squareArray($numbers);  //Throws error for bad passed type
$squaredArray = ArrayHelper::squareArray($number_arr); //Everything works correct since passed parameter is an array

ArrayHelper::printArray($squaredArray); //Expects array will break if anything else is passed

//N0 STRICT TYPES =====

$stringHelper = new StringHelper();
/* Without strict_types code runs or we only get a warning even though the wrong types are passed to the function
/* Passing null does not show anything instead we get an empty param result which makes debugging hard
*/
$stringHelper->printFavoriteSong('Michael Jackson', null);
//Passing a number event though we are expecting a string only gives a notice but doesn't throw any exceptions
$stringHelper->printFavoriteSong('Michael Jackson', 1);
//Even though we need a string without strict type we can set a value to be anything
//and in this particular case we get absolutely no errors or notices even though we passed the wrong type
$stringHelper->setFavoriteCarModel([1,2,3,4,56]);