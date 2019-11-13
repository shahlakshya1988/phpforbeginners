<?php 
/**
 * In php we can have the variables whoses value can't be changes
 * they are know as constants 
 * define();
 * they can have value of different types
 * THEY ARE GLOBAL, AND ARE AVAILABLE THROUGHT SCRIPTS
 * 
 */
echo "<br>";
define("MAXIMUM",10000);
@define("MAXIMUM",99); // ERROR

echo MAXIMUM;
require_once "Item.php";
var_dump(Item::MAX_LENGTH);
$item = new Item();
$item->print();