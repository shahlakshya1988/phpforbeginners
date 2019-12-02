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

    /*$article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    if ($article->update($conn)) {

        Url::redirect("/admin/article.php?id={$article->id}");

    } */
    echo "<pre>",print_r($_FILES),"</pre>";
    try{
        switch($_FILES["file"]["error"]){
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception("No File Uploaded");
                break;
            default:
                throw new Exception("An Upload Error Occured");
        }
    }catch(Exception $e){
        var_dump($e->getMessage());
    }
}

?>
<?php require '../includes/header.php'; ?>

<h2>Edit Article</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Upload Image</label>
    <input type="file" name="file" id="file">
    <button type="submit">Upload File</button>
</form>

<?php require '../includes/footer.php'; ?>
