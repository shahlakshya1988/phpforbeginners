<?php 
    //require "classes/Article.php";
    spl_autoload_register(function($classname){
        var_dump($classname);
        $file_path = "classes/{$classname}.php";
        if(file_exists($file_path)){
            require_once $file_path;
        }
    });
    $article = new Article();
    var_dump($article);
?>