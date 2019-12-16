<?php 
/**
 * 
 */
class Category{
    /***
     * this will return 
     * all the categories
     */
    public static function getAll($conn){
        $sql="SELECT * FROM `category` order by `id`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);        
    }
}