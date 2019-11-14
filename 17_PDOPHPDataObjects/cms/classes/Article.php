<?php 
/**
 * 
 */
class Article{
    /**
     * 
     */
    public static function getAll($conn){
        $sql = "SELECT *
        FROM article
        ORDER BY published_at;";
        
        try{
            $results = $conn->query($sql);
        }catch(Exception $e){
            echo $e->getMessage();
            die();
        }
        //var_dump($results);
        $articles = $results->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
            
    }
    /**
     * 
     */
    public static function getById($conn, $id, $columns = '*'){
        $sql = "SELECT $columns
                FROM article
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        if($stmt->execute()){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
    }
}