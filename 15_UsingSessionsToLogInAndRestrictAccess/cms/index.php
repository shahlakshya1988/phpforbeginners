<?php
session_start();
require 'includes/database.php';
$conn = getDB();
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>
<?php require 'includes/header.php'; ?>
<?php 
if(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"]):
    ?>
        <p>You Are Logged In. <a href="logout.php">Logout</a></p>
    <?php 
else:
    ?>
    <p>You Are Not Logged In. <a href="login.php">Login</a></p>
    <?php
endif;
?>
<a href="new-article.php">Add New Article</a>
<br>
<?php if (empty($articles)): ?>
    <p>No articles found.</p>
<?php else: ?>

    <ul>
        <?php foreach ($articles as $article): ?>
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
