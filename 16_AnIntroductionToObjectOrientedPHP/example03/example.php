<?php 
require_once "Item.php";
echo "<br>";
echo Item::getCount();
echo "<br>";
$item1 = new Item("Item 1","Item 1 Description");
echo Item::getCount();
echo "<br>";
$item2 = new Item("Item 2","Item 2 Description");
echo Item::getCount();
echo "<br>";
$item3 = new Item("Item 3","Item 3 Description");
echo Item::getCount();
echo "<br>";