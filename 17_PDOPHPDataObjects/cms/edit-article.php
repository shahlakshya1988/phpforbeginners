<?php
/*
require 'includes/database.php';*/
require 'includes/article.php'; 
require "classes/Database.php";
require "classes/Article.php";
require 'includes/url.php';

$db = new Database();
$conn = $db->getConnection();

if (isset($_GET['id'])) {

    $article = Article::getById($conn, $_GET['id']);
    //var_dump($article);

    if ($article) {

        // $id = $article['id'];
        $id = $article->id;
        // $title = $article['title'];
        $title = $article->title;
        // $content = $article['content'];
        $content = $article->content;
        // $published_at = $article['published_at'];
        $published_at = $article->published_at;
        //$published_at = date("d-m-Y\TH:i:sP",strtotime($published_at));
        //var_dump($published_at);

    } else {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $title = $_POST['title'];
    $article->title = $_POST["title"];
    // $content = $_POST['content'];
    $article->content = $_POST["content"];
    // $published_at = $_POST['published_at'];
    $article->published_at = $_POST["published_at"];

//var_dump($published_at); die();
    $errors = $article->validateArticle();

    if (empty($errors)) {
        //($article->update($conn));
        if($article->update($conn)){
            //var_dump("I am ok"); die();
            redirect("article.php?id={$article->id}");
            die();
        }else{

        }
    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>Edit article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>
