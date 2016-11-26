<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 26/11/2559
 * Time: 13:22
 */
class Home extends CI_Controller
{
    Public function index(){

      echo "Hello";

    }
    public  function test( $name="kaisaya", $lastname="kombut"){

       echo "My name is :".$name." ".$lastname;

    }

    public function calculator($a = 5, $b = 4,$c=5+4)
    {
        echo"$c";
    }

}