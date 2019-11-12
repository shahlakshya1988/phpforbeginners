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
$myItem->sayHello();
echo $myItem->getName();
echo "<br>";
echo "<br>******************<br>";
$myItem2 = new Item();
var_dump($myItem2);
var_dump($myItem2->name);
var_dump($myItem2->description);
$myItem2->sayHello();
$myItem2->getName();
echo "<br>";

echo "<br>******************<br>";
$myItem3 = new Item();
$myItem3->name="Item 3";
var_dump($myItem3->getName());

echo "<br>******************<br>";
$myItem4 = new Item("Item 4","Item 4 Description Goes here");
//var_dump($myItem4->cost);
echo "<br>******************<br>";
$myItem5 = new Item("Item 5","Item 5 Description Goes here",5000);
var_dump($myItem5);
echo $myItem5->getCost();
echo "<br>";