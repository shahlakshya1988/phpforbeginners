<?php

/**
 * Article
 *
 * A piece of writing for publication
 */
class Article
{
    /**
     * Unique identifier
     * @var integer
     */
    public $id;

    /**
     * The article title
     * @var string
     */
    public $title;

    /**
     * The article content
     * @var string
     */
    public $content;

    /**
     * The publication date and time
     * @var datetime
     */
    public $published_at;

    /**
     * Validation errors
     * @var array
     */
    public $errors = [];

    /**
     * 
     */
    public $image_file;

    /**
     * Get all the articles
     *
     * @param object $conn Connection to the database
     *
     * @return array An associative array of all the article records
     */
    public static function getAll($conn)
    {
        $sql = "SELECT *
                FROM article
                ORDER BY published_at;";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Get the article record based on the ID
     *
     * @param object $conn Connection to the database
     * @param integer $id the article ID
     * @param string $columns Optional list of columns for the select, defaults to *
     *
     * @return mixed An object of this class, or null if not found
     */
    public static function getByID($conn, $id, $columns = '*')
    {
        $sql = "SELECT $columns
                FROM article
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Article');

        if ($stmt->execute()) {

            return $stmt->fetch();

        }
    }

    /**
     * Update the article with its current property values
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the update was successful, false otherwise
     */
    public function update($conn)
    {
        if ($this->validate()) {

            $sql = "UPDATE article
                    SET title = :title,
                        content = :content,
                        published_at = :published_at
                    WHERE id = :id";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);

            if ($this->published_at == '') {
                $stmt->bindValue(':published_at', null, PDO::PARAM_NULL);
            } else {
                $stmt->bindValue(':published_at', $this->published_at, PDO::PARAM_STR);
            }

            return $stmt->execute();

        } else {
            return false;
        }
    }
    /**
     * this method is used for updateing the 
     * categories
     */
    public function setCategories($conn,$categories){
		// we have to delete categories, before adding new categories 
		$del_sql="DELETE FROM `article_category` where `article_id` = ?";
		$del_stmt = $conn->prepare($del_sql);
		$del_stmt->bindParam(1,$this->id,PDO::PARAM_INT);
		$del_stmt->execute();
		// we have to delele categories, before adding new categories 
        if($categories){
            $sql="INSERT IGNORE INTO `article_category`(`article_id`,`category_id`) values ";
			$value=[]; // empty array
			foreach($categories as $category){
				// we are using question mark as we don't know
				// the number of categories
					$value[]=" ({$this->id},?) "; 
			}
			$sql.=" ".implode(", ",$value);
			$stmt = $conn->prepare($sql);
			
			// note &$value should be there 
			// otherwise last value is inserted 
			foreach($categories as $key=>&$value){
				// here we are using bindParma with index. index starts at 1, but array
				// index starts as 0 so add one to it
				$stmt->bindParam($key+1,$value,PDO::PARAM_INT);
			}
             $stmt->execute(); // single execute
        }
    }

    /**
     * Validate the properties, putting any validation error messages in the $errors property
     *
     * @return boolean True if the current properties are valid, false otherwise
     */
    protected function validate()
    {
        if ($this->title == '') {
            $this->errors[] = 'Title is required';
        }
        if ($this->content == '') {
            $this->errors[] = 'Content is required';
        }

        if ($this->published_at != '') {
        //var_dump($this->published_at);
          $this->published_at = date('Y-m-d H:i:s',strtotime($this->published_at));
          //var_dump($this->published_at);
            $date_time = date_create_from_format('Y-m-d H:i:s', $this->published_at);
            //var_dump($date_time); die();

            if ($date_time === false) {

                $this->errors[] = 'Invalid date and time';

            } else {

                $date_errors = date_get_last_errors();

                if ($date_errors['warning_count'] > 0) {
                    $this->errors[] = 'Invalid date and time';
                }
            }
        }

        return empty($this->errors);
    }

    /**
     * Delete the current article
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the delete was successful, false otherwise
     */
    public function delete($conn)
    {
        $sql = "DELETE FROM article
                WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * Insert a new article with its current property values
     *
     * @param object $conn Connection to the database
     *
     * @return boolean True if the insert was successful, false otherwise
     */
    public function create($conn)
    {
		//var_dump($conn);
        if ($this->validate()) {

            $sql = "INSERT INTO article (title, content, published_at)
                    VALUES (:title, :content, :published_at)";
			//var_dump($sql);
			//var_dump($conn);
			//print_r($conn);
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':title', $this->title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $this->content, PDO::PARAM_STR);

            if ($this->published_at == '') {
                $stmt->bindValue(':published_at', null, PDO::PARAM_NULL);
            } else {
                $stmt->bindValue(':published_at', $this->published_at, PDO::PARAM_STR);
            }

            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();
                return true;
            }

        } else {
            return false;
        }
    }

    public static function getPage($conn,$limit,$offset){
      $sql="SELECT * FROM `article` ORDER BY `published_at` LIMIT :limit_val OFFSET :offset_val ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":limit_val",$limit,PDO::PARAM_INT);
      $stmt->bindParam(":offset_val",$offset,PDO::PARAM_INT);
      $stmt->execute();
      $stmt->errorInfo();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getTotal($conn){
        $sql = "SELECT COUNT(*) as records FROM `article`";
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        $count_result = $stmt->fetch(PDO::FETCH_OBJ);
        return $count_result->records;
      }

      public function setImageFile($conn,$file_name){
        $sql = "UPDATE `article` SET `image_file` = :image_file WHERE `id` = :id LIMIT 1 ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":image_file",$file_name,$file_name == null ?PDO::PARAM_NULL : PDO::PARAM_STR);
        $stmt->bindParam(":id",$this->id,PDO::PARAM_INT);
        
        return $stmt->execute();


      }

      /**
       * getting articles with categories
       */
      public static function getWithCategory($conn,$id){
        $sql="SELECT `article`.*,`category`.`name` as `category_name` FROM `article` LEFT JOIN `article_category` on `article`.`id` = `article_category`.`article_id` LEFT JOIN `category` on `article_category`.`category_id` = `category`.`id` where `article`.`id` =:id ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        return $results = $stmt->fetchAll(PDO::FETCH_OBJ);

      }

      /**
       * getting categories, from the article object
       */
      public function getCategory($conn){
            $sql="SELECT * FROM `category` left join `article_category` on `category`.`id` = `article_category`.`category_id` where `article_category`.`article_id` = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id",$this->id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

      }
}
