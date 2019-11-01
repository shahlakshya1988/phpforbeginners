<?php
/**
 * for,while,do...while
 * while -> loop around any code, till the condition is true, we need to change the condition
 * for loops are used to excecute the code some specific number of times.
 * do while is exit control loop, at minimum it will execute 1 time
 */
echo PHP_EOL."While Loop".PHP_EOL;
$i=0;
while($i<=10){
    echo $i++.PHP_EOL;
}
echo "After While Loop ".$i;
echo PHP_EOL."FOR Loop".PHP_EOL;
for($i=0;$i<=10;$i++){
    echo $i.PHP_EOL;
}
echo "After For Loop ".$i;

echo PHP_EOL."do While...".PHP_EOL;
$i=11;
do{
    echo $i.PHP_EOL;
}while($i<=10);
echo "After do while Loop ".$i;

echo PHP_EOL."do While...".PHP_EOL;
$i=0;
do{
    echo $i++.PHP_EOL;

}while($i<=10);
echo "After do while Loop ".$i;