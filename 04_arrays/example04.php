<?php
/***
 * PROCESSING ARRAYS WITH LOOPS
 * Unknown numbers of items may be present
 * echo gives error, var_dump,print_r will print out entire array
 * foreach loops are best suited, it can print without knowning the number of elements
 */

$array=["First Post","Second Post","Third Post","Fourth Post","Fifth Post"];
foreach($array as $item_key => $item_value){
    echo $item_key." => ".$item_value.PHP_EOL;
}
echo PHP_EOL;
$employee=[
    "name"=>"Lakshya",
    "age"=>30,
    "gender"=>"Male",
    "languages"=>["PHP","HTML","CSS","Javascript","Jquery"]
];
foreach($employee as $key => $value){
    if(is_array($employee[$key])){
        //var_dump($employee[$key]);
        echo $key.PHP_EOL;
        foreach($employee[$key] as $subkey => $subvalue){

            echo $subkey." ::: ".$subvalue.PHP_EOL;
        }
    }else{
        echo $key." ::: ".$value.PHP_EOL;
    }
}