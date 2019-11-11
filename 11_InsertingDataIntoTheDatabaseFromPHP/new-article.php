<?php require_once "includes/database.php"; ?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["add_article"])){
        echo "<br>";
        echo "<pre>",print_r($_POST),"</pre>";
        echo "<br>";
        $title = mysqli_real_escape_string($conn,trim($_POST["title"]));
        $content = mysqli_real_escape_string($conn,trim($_POST["content"]));
        $published_at = mysqli_real_escape_string($conn,trim($_POST["published_at"]));
       // $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}')";
       //$insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}')";
       $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values (?,?,?)";
       $smt= mysqli_prepare($conn,$insert);
       if(!$smt){
            mysqli_stmt_bind_param($smt,'sbs',$title,$content,$published_at);
            if(mysqli_stmt_execute($smt)){
                var_dump(mysqli_insert_id($conn));
            }else{
                mysqli_stmt_error($smt);
            }
       }else{
        mysqli_error($conn);
       }

        //mysqli_query($conn,$insert) or die($insert." => ".mysqli_error($conn));
        /*
        inserting multiple values in single sql will give the 10, but last inserted 
        was 12;
         */
        //var_dump(mysqli_insert_id($conn)); 
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