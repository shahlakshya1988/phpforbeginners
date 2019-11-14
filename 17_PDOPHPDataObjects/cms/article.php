<?php
require_once "classes/Database.php";
// require 'includes/database.php';
require_once "classes/Article.php";

$db = new Database();
$conn = $db -> getConnection();


if (isset($_GET['id'])) {
   // $article = getArticle($conn, $_GET['id']);
    $article = Article::getById($conn,$_GET['id']);
    var_dump($article);
} else {
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

<?php if ($article === null || $article === FALSE ) : ?>
    <p>Article not found.</p>
<?php else : ?>

    <article>
        <h2><?= htmlspecialchars($article->title); ?></h2>
        <p><?= htmlspecialchars($article->content); ?></p>
    </article>

    <a href="edit-article.php?id=<?= $article->id; ?>">Edit</a>
    <a href="delete-article.php?id=<?= $article->id; ?>">Delete</a>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
