<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["add_article"])){
        echo "<br>";
        echo "<pre>",print_r($_POST),"</pre>";
        echo "<br>";
    }
}
?>
<?php require_once "includes/header.php"; ?>
<h2>New Article</h2>
<form action="" method="POST">
    <div>
        <label for="title">Article Title</label>
        <input type="text" name="title" id="title" placeholder="Article Title">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter Content"></textarea>
    </div>
    <div>
        <label for="published_at">Published At</label>
        <input type="datetime-local" name="published_at" id="published_at" placeholder="published At">
    </div>
    <div>
        <button type="submit" name="add_article">Add Article</button>
    </div>
</form>
<?php require_once "includes/footer.php"; ?>