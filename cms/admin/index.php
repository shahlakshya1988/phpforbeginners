<?php

require_once "../includes/init.php";

Auth::requireLogin();
$conn = require_once "../includes/db.php";

$articles = Article::getAll($conn);
if(isset($_GET["page"]) && !empty($_GET["page"]) ){
    $page = (int) $_GET["page"];
    $page = trim($page);
  }else{
    $page = 1;
  }
  $paginator = new Paginator($page,10,Article::getTotal($conn));
  // var_dump($paginator);
  // die();
  $articles = Article::getPage($conn,$paginator->limit,$paginator->offset);
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
<?php require_once '../includes/pagination.php'; ?>
<?php endif; ?>

<?php require '../includes/footer.php'; ?>
