<?php

require_once "../includes/init.php";

Auth::requireLogin();
$conn = require_once "../includes/db.php";

$articles = Article::getAll($conn);

?>
<?php require '../includes/header.php'; ?>


<h2>Administration</h2>
    <p><a href="new-article.php">New article</a></p>
<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else : ?>
<table>
    <thead>
        <tr>
            <th>Article Title</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article) : ?>
           <tr>
                <td>
                    <a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a>
                 </td>
             </tr>

        <?php endforeach; ?>
    </tbody>
</table>


<?php endif; ?>

<?php require '../includes/footer.php'; ?>
