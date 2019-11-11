<?php 
require 'includes/database.php';
require 'includes/article.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
   $article = getRelatedArticle($_GET['id']);
   $title = $article["title"];
   $content = $article["content"];
   $published_at= $article["published_at"];
  // var_dump($published_at);
} else {
    $article = null;
    header("refresh:0;index.php");
}
//var_dump($article);
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["add_article"])){
		$conn = getDB();
		 $title = trim($_POST["title"]);
       	$content = trim($_POST["content"]);
       	$published_at = trim($_POST["published_at"]);
       	$published_at = date("d-m-Y h:i:s A",strtotime($published_at));
       	$error = validateArticle($title,$content,$published_at);

       	if(!empty($error)){

       	}else{
       		//var_dump($id);
       		$id =$_GET["id"];
       		$update_sql = "UPDATE `article` SET `title` = ?,`content` = ?, `published_at` = ? where `id` = ? LIMIT 1";
       		$stmt = mysqli_prepare($conn,$update_sql);
       		//var_dump($stmt);
       		if(!$stmt){
       			var_dump(mysqli_error($conn));
       		}else{
       			var_dump($content);
       			var_dump($published_at);
       			var_dump($id);
       			mysqli_stmt_bind_param($stmt,"sssi",$title,$content,$published_at,$id);
       			mysqli_stmt_execute($stmt);
       		}
       	}
	}
}
?>
<?php require_once "includes/header.php"; ?>
<h2>Edit Article</h2>
<?php 
require_once "includes/article-form.php"; ?>
<?php require_once "includes/footer.php"; ob_end_flush(); ?>