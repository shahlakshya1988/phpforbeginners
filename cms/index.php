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
    <nav>
        <ul>
            <?php if($paginator->previous>0){ ?> 
                <li><a href="/index.php?page=<?=$paginator->previous;?>"><?=$paginator->previous;?></a></li>
            <?php } ?>
            <?php if($paginator->next){?>
                <li><a href="/index.php?page=<?=$paginator->next;?>"><?=$paginator->next;?></a></li>
            <?php } ?>
            
        </ul>
    </nav>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>
