<?php 
/**
 * 
 */
class Article{
    /**
     * [$id description]
     * @var [type]
     */
    public $id;
    /**
     * [$title description]
     * @var [type]
     */
    public $title;
    /**
     * [$content description]
     * @var [type]
     */
    public $content;
    /**
     * [$published_at description]
     * @var [type]
     */
    public $published_at;

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
        $stmt->setFetchMode(PDO::FETCH_CLASS,'Article');
        if($stmt->execute()){
            return $stmt->fetch();
        }
    
    }

    /**
     * 
     */
    public function update($conn){
        $sql = "UPDATE `article` SET `title` = :title, `content`=:content, `published_at`=:published_at where `id` = :id";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([
            "title"=>$this->title,
            "content"=>$this->content,
            "published_at"=>$this->published_at,
            "id"=>$this->id
        ]);


    }
}