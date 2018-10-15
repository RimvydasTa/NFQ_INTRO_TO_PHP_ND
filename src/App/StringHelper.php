<?php
/**
 * Created by PhpStorm.
 * User: Rimvydas
 * Date: 10/13/2018
 * Time: 14:53
 */

namespace App;


class StringHelper
{
    public  $carModel;

    public  function printFavoriteSong($title, $songName)
    {
        echo $title . " - " . $songName;
   }

    public  function setFavoriteCarModel($str)
    {
      $this->carModel = $str;
   }
}