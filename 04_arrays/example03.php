<?php
/**
 * arrays can have multiple type
 * string, int, float, null, boolean.arrays
 * we can also assign the variables into the array, in this case values of the variables are placed into the array
 * multidimensional arrays is the array of array
 * We have to sue mainarray["subarray_position"]["key"]
 */
$values = ["message"=>"Hello World","count"=>150,"pi"=>3.14,"status"=>false,"result"=>null];
var_dump($values);
echo PHP_EOL;
print_r($values);
$count = 3;
$price = 150.99;
$values = [$count,$price];
print_r($values);
echo PHP_EOL;
echo PHP_EOL;
$employee = [
    ["name"=>"Alice","email"=>"alice@example.com","height"=>1.78],
    ["name"=>"Bob","email"=>"bob@example.com","height"=>1.83],
    ["name"=>"Carol","email"=>"carol@example.com","height"=>1.68],
];
print_r($employee);
echo PHP_EOL;
ECHO $employee[0]["email"];
echo PHP_EOL;
ECHO $employee[1]["name"];
echo PHP_EOL;
echo PHP_EOL;
$articles = [
    ["title"=>"First Post", "content"=>"First Post Content"],
    ["title"=>"Second Post","content"=>"Second Post Content"],
    ["title"=>"Third Post","content"=>"Third Post Content"]
];
var_dump($articles);
echo PHP_EOL;
echo "<pre>",print_r($articles),"</pre>";