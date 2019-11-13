<?php 
require_once "Item.php";
$item = new Item();
$item->setName("Some Name");
var_dump($item->getName());
