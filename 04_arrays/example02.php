<?php
/**
 * When we created the array, indexes were assigned automatically by PHP
 * first element has index of 0
 * indexs are automatically created starting from 0
 * to specify index manually you can use =>, they can't be sequential
 * Array with the string index are called assosiative arrays
 * Only Integers and Strings can be used as indexes.
 */
$array = [
    1=>"PHP",
    "Javascript",
    3=>"Jquery",
    "HTML"

];
print_r($array);

$array = [
    1=>"PHP",
    "Javascript",
    2=>"Jquery",
    "HTML"

];
print_r($array);

$personal_details = [
    "first_name"=>"Lakshya",
    "age"=>30,
    "dateofbirth"=>"20-January-1989",
    "gender"=>"Male",
    "hobbies"=>"Programming"
];
print_r($personal_details);
echo PHP_EOL;
echo $personal_details["first_name"];
echo PHP_EOL;
echo $personal_details["age"];
echo PHP_EOL;
echo $personal_details["gender"];
echo PHP_EOL;
echo $personal_details["hobbies"];
echo PHP_EOL;
echo PHP_EOL;
$personal_details = [
    "first_name"=>"Lakshya",
    "age"=>30,
    "dateofbirth"=>"20-January-1989",
    "gender"=>"Male",
    "hobbies"=>"Programming",
    "age"=>32
];
print_r($personal_details);
