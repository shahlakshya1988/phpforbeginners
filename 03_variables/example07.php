<?php
/**
 * string variables can be created by single or double
 * but quote at start and end should be matched
 * backslash used for differentiating the quotes \",\'
 */
echo "Hello World <br>";
echo 'Hello World <br>';
echo "Hello \" World <br>"; // Hello " World
echo "Hello ' World <br>"; // Hello ' World
echo 'Hello \' World <br>'; // Hello ' World
echo 'Hello " World <br>'; // Hello " World

echo "Hello World \n\r";
echo "<br>";
echo "Hello World \t";
echo "<br>";
$name = "Jack";
echo "Hello World, {$name} <br>";
echo 'Hello World, {$name} <br>';
echo "Hello ".' World';
echo "<br>";
