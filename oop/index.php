<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.08.2017
 * Time: 13:09
 */
//require_once __DIR__."/fcandrive/Candrive.php";
//require_once __DIR__."/fcanfly/Canfly.php";
//require_once "/faircraft/aircraft.php";
require_once "fcar/car.php";
//require_once "Shape.php";
//require_once "Point.php";

define('ROOT',dirname(__FILE__));

function __autoload($class_name)
{
    //List all calss directoreas array

    $array_paths = array(

        '/fcanfly/',
        '/fcandrive/',
        '/faircraft/',
        '/fcar/',
    );

    foreach($array_paths as $path){
        $path =   ROOT.$path .$class_name.'.php';

        if(is_file($path)){
            include_once $path;
        }
    }
}

//$p = new Point(3,6);

//$p->drow();

$c =new \fcar\Car();
$c->muve();
$a= new \faircraft\Aircraft();
$a->fly();
echo "<br>";

