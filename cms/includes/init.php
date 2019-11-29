<?php 
//var_dump(dirname(__DIR__));
spl_autoload_register(function($classname){
    $file_path = dirname(__DIR__)."/classes/{$classname}.php";
    if(file_exists($file_path)){
        require_once $file_path;
    }
});
session_start();