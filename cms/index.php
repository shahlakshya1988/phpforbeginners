<?php

require_once "includes/init.php";


$conn = require_once "includes/db.php";

$articles = Article::getAll($conn);
/*$page = $_GET["page"] ?? 1;
var_dump($page);*/
if(isset($_GET["page"]) && !empty($_GET["page"]) ){
  $page = (int) $_GET["page"];
  $page = trim($page);
}else{
  $page = 1;
}
$paginator = new Paginator($page,5,Article::getTotal($conn));
// var_dump($paginator);
// die();
$articles = Article::getPage($conn,$paginator->limit,$paginator->offset);

?>
<?php require 'includes/header.php'; ?>


<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else : ?>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <li>
                <article>
                    <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
                    <p><?= htmlspecialchars($article['content']); ?></p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>
 <?php require_once "includes/pagination.php"; ?>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>
