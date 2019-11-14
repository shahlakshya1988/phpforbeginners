<?php

require "classes/Database.php";
require "classes/Article.php";
require 'includes/url.php';
require 'includes/auth.php';

session_start();

if (! isLoggedIn()) {

    die("unauthorised");

}
$db = new Database();
$conn = $db->getConn();
$article = new Article();

$title = '';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];
    $article->title = $title;
    $article->content = $content;
    $article->published_at = $published_at;

    if($article->create($conn)){
        $article->id = $conn->lastInsertId();
        redirect("article.php?id={$article->id}");
        die();
    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>New article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require 'includes/footer.php'; ?>
