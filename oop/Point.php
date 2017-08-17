<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.08.2017
 * Time: 13:07
 */
class Point extends Shape
{
    public $x;
    public $y;

    public  function __construct($x,$y)
    {
        $this->x =$x;
        $this->y =$y;
    }

    public function drow()
    {
        echo "Dorw point weth koordents ".$this->x."and".$this->y;
    }



}