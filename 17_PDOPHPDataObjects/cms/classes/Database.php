<?php
class Database{
   
    public function getConnection(){
        $db_host = "localhost";
        $db_name = "phpforbeginners_cms";
        $db_user = "root";
        $db_pass = "";
        $dsn = "mysql:host={$db_host};dbname={$db_name}";
        try{
            $db = new PDO($dsn,$db_user,$db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(PDOException $e){
          //  var_dump($e);
            echo $e->getMessage();
            die();
        }
    }
}