<?php
/**
 * we can get mixed results like float from the
 * operations performed on intergers
 */
$count = 52;
$size = 3;
var_dump($count * $size);
var_dump($count + $size);
var_dump($count / $size);
var_dump($count % $size);
var_dump($count - $size);

$message = "Hello, ";
$name = "Dave";
//string Concat
$string = $message.$name;
var_dump($message);
var_dump($name);
var_dump($string);


$price = "150"; //string
$qty = 3; //interger
$qty = 3.5; //float
$result = $price * $qty;
var_dump($result);

$result = $price + $qty;
var_dump($result);

$result = $price - $qty;
var_dump($result);

$result = $price / $qty;
var_dump($result);

$result = $price % $qty;
var_dump($result);
