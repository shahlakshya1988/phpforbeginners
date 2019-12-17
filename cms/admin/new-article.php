<?php
require_once "../includes/init.php";
$conn = require_once "../includes/db.php";


if (! Auth::isLoggedIn()) {

    die("unauthorised");

}

$article = new Article();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $conn = require_once "../includes/db.php";

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    if ($article->create($conn)) {
		$article->setCategories($conn,$categories_id);
        Url::redirect("/admin/article.php?id={$article->id}");

    }
}
$article_category_id=[];
$categories = Category::getAll($conn);
?>
<?php require '../includes/header.php'; ?>

<h2>New article</h2>

<?php require '../includes/article-form.php'; ?>

<?php require '../includes/footer.php'; ?>
