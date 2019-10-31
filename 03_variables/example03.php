<?php
/**
*variables can store data of different type
*Previously we use it for string, sequence of char between quotes [single/double]
*content between the quotes are stored into variables
*variable can have numbers int, float positive and negative
*123 -> interger
*"123" -> String of numeric char
*php is loosly type, we can have variable and have different types of values
*/

$message = "Hello World";
var_dump($message);
$count = 25;
var_dump($count);
$pi=3.14;
var_dump($pi);

$var = 123; //int
var_dump($var);
$var = 3.125; //float
var_dump($var);
$var = "Hello World"; // String
var_dump($var);
$var = true; //boolean
var_dump($var);
?>
