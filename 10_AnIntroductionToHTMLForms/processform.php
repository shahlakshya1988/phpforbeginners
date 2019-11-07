<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){
    echo "<br>Request<br>";
    echo "<pre>",print_r($_REQUEST),"</pre>";
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "<br>Get<br>";
    echo "<pre>",print_r($_GET),"</pre>";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "<br>POST<br>";
    echo "<pre>",print_r($_POST),"</pre>";
}