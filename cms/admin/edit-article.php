<?php

require_once "../includes/init.php";
$conn = require_once "../includes/db.php";

if (isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

    if ( ! $article) {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}
$article_category = $article->getCategory($conn);
$article_category_id = array_column($article_category,"id");
// var_dump($article_category);
$categories = Category::getAll($conn);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    if ($article->update($conn)) {

        Url::redirect("/admin/article.php?id={$article->id}");

    }
}

?>
<?php require '../includes/header.php'; ?>

<h2>Edit article</h2>

<?php require '../includes/article-form.php'; ?>

<?php require '../includes/footer.php'; ?>
