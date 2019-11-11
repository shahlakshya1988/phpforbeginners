<?php
session_start();
require 'includes/database.php';
require 'includes/article.php';
$conn = getDb();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
   $article = getRelatedArticle($_GET['id'],"title");
   $title = $article["title"];
   $article["id"] = $_GET['id'];
   
  // var_dump($published_at);
} else {
    $article = null;
    header("refresh:0;index.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["delete_article"])){
		//var_dump($id); die();
		$id = trim($_POST['id']);
		$sql = "DELETE FROM `article` where `id` = ?";
		$stmt = mysqli_prepare($conn,$sql);
		if($stmt){
			mysqli_stmt_bind_param($stmt,"i",$id);
			mysqli_stmt_execute($stmt);
			header("Location: index.php");
			die();
		}else{
			mysqli_error($conn);
		}
	}
}
require_once "includes/header.php";
?>
<h2>Delete Article, <?= $article['title']; ?></h2>
<form method="post" action="">
	<input type="hidden" name="id" value="<?= $article['id']; ?>" >
		<button type="submit" name="delete_article">Delete</button>
		<a href="article.php?id=<?= $article['id']; ?>">Go Back</a>
	</form>
<?php 
require_once "includes/footer.php";