<?php
/**
 *SWITCH does similar to if..elseif
 * it compares the value to different value, and excecute the code below it till break;
 *
 */
$age = 25;
switch($age){
    case ($age>=30):
        echo "Age is greater than 30".PHP_EOL;
        break;
    case ($age>=25):
        echo "Age is greater than 25, but less than 30".PHP_EOL;
        break;
    case ($age>=20):
        echo "Age is greater than 20, but less than 25".PHP_EOL;
        break;
    case ($age>=15):
        echo "Age is greater than 20, but less than 25".PHP_EOL;
    default:
        echo "Age is Less than 15".PHP_EOL;
}