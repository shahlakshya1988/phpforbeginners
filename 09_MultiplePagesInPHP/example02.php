<?php 
echo "<pre>",print_r($_SERVER),"<pre>";
echo "<br>";
var_dump($_SERVER["QUERY_STRING"]);
echo "<br>";
var_dump($_GET);
echo "<br>";
var_dump($_REQUEST);