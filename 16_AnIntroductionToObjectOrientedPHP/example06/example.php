<?php
require_once "Item.php";
require_once "Book.php";
$book = new Book();
$book->name = "Learn PHP 7";
$book->author = "Udemy";
echo $book->getDetails();
