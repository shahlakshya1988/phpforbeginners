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
        if(empty($_FILES)){
            throw new Exception("Please Select The File To Upload");
        }
        switch($_FILES["file"]["error"]){
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception("No File Uploaded");
                break;
            case UPLOAD_ERR_INI_SET:
                throw new Exception("File is Too Large");
                break;
            default:
                throw new Exception("An Upload Error Occured");
        }
        if($_FILES["file"]["size"] >1000000){
            throw new Exception("Please Upload File Under 1 MB");
        }
        $allowed_types=["image/gif","image/png","image/jpg","image/jpeg"];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_file($finfo,$_FILES["file"]["tmp_name"]);
        if(!in_array($mime_type,$allowed_types)){
            throw new Exception("File Type Improper");
        }
        $destination = "../uploads/".strtolower($_FILES["file"]["name"]);
        if(!move_uploaded_file($_FILES["file"]["tmp_name"],$destination)){
            throw new Exception("Error In Moving File");
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
