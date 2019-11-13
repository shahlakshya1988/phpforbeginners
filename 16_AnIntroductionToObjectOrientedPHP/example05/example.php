<?php
require "Item.php";
require "Book.php";
$myItem = new Item();
$myItem->name = "TV";
echo "<br>";
echo $myItem->getName();
echo "<br>";
$myBook = new Book();
$myBook->name = "Lets Learn PHP";
$myBook->author = "Udemy";
echo "<br>";
echo $myBook->getName();
echo "<br>";