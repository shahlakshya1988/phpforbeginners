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

    function validate()
    {
        $title = $article->title; 
        $content = $article->content; 
        $published_at = $article->published_at;
        $errors = [];

        if ($title == '') {
            $errors[] = 'Title is required';
        }
        if ($content == '') {
            $errors[] = 'Content is required';
        }

        if ($published_at != '') {
            $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);
            
            if ($date_time === false) {

                $errors[] = 'Invalid date and time';

            } else {

                $date_errors = date_get_last_errors();

                if ($date_errors['warning_count'] > 0) {
                    $errors[] = 'Invalid date and time';
                }
            }
        }

        return $errors;
    }

}