<?php
$array = [1,2,3,4,5,6,7,8,9,10];
print_r($array);
// &-> we are referencing the array pocket directly
foreach($array as &$value){
    $value *= 2;
}
print_r($array);
// we have to use unset() on $value otherwise below loop last element will be printed wrong
unset($value);
foreach($array as $key=>$value){
    echo $key." ".$value.PHP_EOL;
}
echo PHP_EOL;
$array=[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
foreach($array as list($a,$b,$c)){
    echo $a." ".$b." ".$c.PHP_EOL;
}