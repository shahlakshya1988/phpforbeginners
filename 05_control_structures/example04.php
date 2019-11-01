<?php
/**
 * if..elseif...else this is used to test multiple conditions, if no one matches then
 * else block will execute. if some condition matches then no condition after it is checked
 */
$age = 1;
if($age>=30){
    echo "You Are Above 30";
}elseif($age>=25){
    echo "You are Above 25 but Below 30";
}elseif($age>=20){
    echo "You are Above 20 but Below 25";
}elseif($age>=15){
    echo "You are Above 15 but Below 20";
}else{
    echo "You are Below 15 Years Of Age";
}
echo PHP_EOL;