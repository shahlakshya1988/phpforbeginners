<?php 
require "Item.php";
$myItem = new Item();
$myItem->name="Item 1";
$myItem->description="Item 1 Description";
$myItem->notedecelared="Not Decelared In class";
var_dump($myItem);
var_dump($myItem->name);
var_dump($myItem->description);
var_dump($myItem->notedecelared);
echo "<br>******************<br>";
$myItem2 = new Item();
var_dump($myItem2);
var_dump($myItem2->name);
var_dump($myItem2->description);
