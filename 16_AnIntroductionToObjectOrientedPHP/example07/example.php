<?php
require_once "Item.php";
require_once "Book.php";
echo "<br>";
$book = new Book();
$book->name = "Learn PHP 7";
$book->author = "Udemy";
echo $book->getDetails();
echo "<br>";
echo $book->getCode();
