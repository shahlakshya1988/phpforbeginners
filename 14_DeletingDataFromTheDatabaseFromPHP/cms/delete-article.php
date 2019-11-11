<?php
require 'includes/database.php';
require 'includes/article.php';
$conn = getDb();
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

$id = trim($_GET['id']);
$sql = "DELETE FROM `article` where `id` = ?";
$stmt = mysqli_prepare($conn,$sql);
if($stmt){
	mysqli_stmt_bind_param($stmt,"i",$id);
	mysqli_stmt_execute($stmt);
}else{
	mysqli_error($conn);
}
header("Location: index.php");
die();