<?php

require_once "includes/init.php";

$conn = require_once "includes/db.php";

if (isset($_GET['id'])) {
    $article = Article::getWithCategory($conn, $_GET['id']);
    //var_dump($article);
} else {
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

<?php if ($article) : ?>

    <article>
        <h2><?= htmlspecialchars($article[0]->title); ?></h2>
        <ul>
            <?php foreach($article as $a) : ?>
                <li><?=$a->category_name;?></li>
            <?php endforeach; ?>
        </ul>
        <?php if($article[0]->image_file){ ?>
            <img src="/uploads/<?=$article[0]->image_file; ?>" alt="" style="max-width:100%;"> 
        <?php } ?>
        <p><?= htmlspecialchars($article[0]->content); ?></p>
    </article>

    <a href="edit-article.php?id=<?= $article[0]->id; ?>">Edit</a>
    <a href="delete-article.php?id=<?= $article[0]->id; ?>">Delete</a>

<?php else : ?>
    <p>Article not found.</p>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>
