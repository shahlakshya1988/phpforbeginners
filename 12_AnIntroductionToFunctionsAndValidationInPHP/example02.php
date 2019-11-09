<?php
function showMessage($name = ''){
    echo PHP_EOL."Hello, {$name}".PHP_EOL;
}
showMessage("Lakshya");
showMessage("Jack");
showMessage("John");
showMessage(); // default value is used in function definantion