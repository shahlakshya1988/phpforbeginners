<?php
class Database{
   
    public function getConnection(){
        $db_host = "localhost";
        $db_name = "phpforbeginners_cms";
        $db_user = "root";
        $db_pass = "";
        $dsn = "mysql:host={$db_host};dbname={$db_name}";
        return new PDO($dsn,$db_user,$db_pass);
    }
}