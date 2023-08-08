<?php

//$x = '';          //empty(true) isset(true) is_null(false) bool: if(false)
//$x = null;        //empty(true) isset(false) is_null(true) bool: if(false)
//var $x;           //empty(true) isset(false) is_null(true) bool: if(false)
//$x не определена  //empty(true) isset(false) is_null(true) bool: if(false)
//$x = [];          //empty(true) isset(true) is_null(false) bool: if(false)
//$x = ['a', 'b'];  //empty(false) isset(true) is_null(false) bool: if(true)
//$x = false;       //empty(true) isset(true) is_null(false) bool: if(false)
//$x = true;        //empty(false) isset(true) is_null(false) bool: if(true)
//$x = 1;           //empty(false) isset(true) is_null(false) bool: if(true)
//$x = 42;          //empty(false) isset(true) is_null(false) bool: if(true)
//$x = 0;           //empty(true) isset(true) is_null(false) bool: if(false)
//$x = -1;          //empty(false) isset(true) is_null(false) bool: if(true)
//$x = "1";         //empty(false) isset(true) is_null(false) bool: if(true)
//$x = "0";         //empty(true) isset(true) is_null(false) bool: if(false)
//$x = "-1";        //empty(false) isset(true) is_null(false) bool: if(true)
//$x = "php";       //empty(false) isset(true) is_null(false) bool: if(true)
//$x = "true";      //empty(false) isset(true) is_null(false) bool: if(true)
//$x = "false";     //empty(false) isset(true) is_null(false) bool: if(true)

$x = false;

if ($x){
    echo 'YES';
} else {
    echo 'NO';
}
