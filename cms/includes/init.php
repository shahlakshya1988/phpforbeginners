<?php 
spl_autoload_register(function($classname){
    $file_path = "classes/{$classname}.php";
    if(file_exists($file_path)){
        require_once $file_path;
    }
});
session_start();