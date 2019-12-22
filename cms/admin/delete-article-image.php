<?php

require_once "../includes/init.php";
$conn = require_once "../includes/db.php";

if (isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

    if ( ! $article) {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $previous_image = $article->image_file;
    $filename = null;
    if($article->setImageFile($conn,$filename)){
        if($previous_image){
            unlink("../uploads/".$previous_image);
        }
        Url::redirect("/admin/article.php?id={$article->id}");
    }
    
}

?>
<?php require '../includes/header.php'; ?>

<h2>Delete Article</h2>
<?php if($article->image_file){ ?>
    <img src="../uploads/<?=$article->image_file; ?>" alt="" style="max-width:10vw;"> 
<?php } ?>
<form action="" method="POST" enctype="multipart/form-data">
    <a  href="edit-article-image.php?id=<?=$article->id;?>">Cancel</a>
    <button type="submit">Delete File</button>
</form>

<?php require '../includes/footer.php'; ?>
