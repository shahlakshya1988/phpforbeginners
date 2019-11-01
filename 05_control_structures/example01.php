<?php
/**
 * Using if else we can perform different actions based on different
 * conditions.
 * if(condition){
 * condition true;
 * condition true;
 * }else{
 * condition false;
 * condition false;
 * }
 * ALWAYS USE CURLY BRACES {}
 */
echo "Code before IF...ELSE statement".PHP_EOL;
if(true){
    echo "Condition is true ".PHP_EOL;
}else{
    echo "Condition is False ".PHP_EOL;
}
echo "Code After IF...ELSE statement ".PHP_EOL;
echo PHP_EOL.PHP_EOL;
echo "Code before IF...ELSE statement".PHP_EOL;
if(false){
    echo "Condition is true ".PHP_EOL;
}else{
    echo "Condition is False ".PHP_EOL;
}
echo "Code After IF...ELSE statement ".PHP_EOL;

echo PHP_EOL;
$arr = [];
if(empty($arr)){
    echo "Array is Empty".PHP_EOL;
}

echo PHP_EOL;
$arr = [1,2,3];
if(empty($arr)){
    echo "Array is Empty".PHP_EOL;
}else{
    echo "Array is Having Values".PHP_EOL;
}