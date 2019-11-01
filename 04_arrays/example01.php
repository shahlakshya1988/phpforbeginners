<?php
/**
 * array is the single variable containing the list of values [many values of different or same type], simple variable
 * will only have single value, but array have many values.
 * array() , []
 * $arr_variable = [1,2,3,4,5,67,6.7,"Hello World"]; -> preferred
 * $arr_variable = array(1,2,3,4,5,67,6.7,"Hello World");
 * number of values is decided run time.
 * ARRAY index starts at zero
 * every item is called element
 * We can access the individual element by putting their position in square brackets after array name
 * Individual elements can be treated as seperate variables.
 */
$languages = ["PHP","Javascript","HTML","CSS","Jquery"];
echo $languages; //error
echo PHP_EOL;
var_dump($languages);
echo PHP_EOL;
echo "<pre>",print_r($languages),"</pre>";
echo PHP_EOL;
echo $languages[0]; // first element
echo PHP_EOL;
echo $languages[1]; // second element
echo PHP_EOL;
echo $languages[2]; // third element
echo PHP_EOL;
echo $languages[3]; // fourth element
echo PHP_EOL;
echo $languages[4]; // fifth element
echo PHP_EOL;

echo $languages[14]; // Invalid Index
echo PHP_EOL;

