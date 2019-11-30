<?php

require_once "includes/init.php";


$conn = require_once "includes/db.php";

$articles = Article::getAll($conn);
$paginator = new Paginator(1,10);
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

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
