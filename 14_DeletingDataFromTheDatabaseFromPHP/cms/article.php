<?php

require 'includes/database.php';
require 'includes/article.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
   $article = getRelatedArticle($_GET['id']);

} else {
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

<?php if ($article === null): ?>
    <p>Article not found.</p>
<?php else: ?>

    <article>
        <h2><?= htmlspecialchars($article['title']); ?></h2>
        <p><?= htmlspecialchars($article['content']); ?></p>
    </article>
	<a href="edit-article.php?id=<?= $article['id']; ?>">Edit</a> 
	<!-- <a href="delete-article.php?id=<?= $article['id']; ?>">Delete</a> -->
	<form method="post" action="delete-article.php?id=<?= $article['id']; ?>">
		<!-- <input type="hidden" name="id" value="<?= $article['id']; ?>" > -->
		<button type="submit" name="delete_article_confirm">Delete</button>
	</form>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>
