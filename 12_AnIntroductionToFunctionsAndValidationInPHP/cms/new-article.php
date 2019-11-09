<?php require_once "includes/database.php"; ?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = getDB();
    if(isset($_POST["add_article"])){
        echo "<br>";
        echo "<pre>",print_r($_POST),"</pre>";
        echo "<br>";
        $error=[];
        $title = mysqli_real_escape_string($conn,trim($_POST["title"]));
        $content = mysqli_real_escape_string($conn,trim($_POST["content"]));
        $published_at = mysqli_real_escape_string($conn,trim($_POST["published_at"]));
        if(trim($title)==""){
            $error[]="Title Is Required";
        }
        if(trim($content)==""){
            $error[]="Content Is Required";
        }
       // $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}')";
       //$insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}')";

       if(empty($error)){
        $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values (?,?,?)";
        $smt= mysqli_prepare($conn,$insert);
        if(!$smt){
                mysqli_stmt_bind_param($smt,'sbs',$title,$content,$published_at);
                if(mysqli_stmt_execute($smt)){
                    var_dump(mysqli_insert_id($conn));
                    unset($title);
                    unset($content);
                    unset($published_at);
                }else{
                    mysqli_stmt_error($smt);
                }
        }else{
            mysqli_error($conn);
        }
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
<?php 
if(isset($error)){
   // var_dump($error);
   if(!empty($error)){
       echo "<ul>";
        foreach($error as $err):
            echo "<li>".$err."</li>";
        endforeach;
        echo "</ul>";
   }
}
?>
<form action="" method="POST">
    <div>
        <label for="title">Article Title</label>
        <input type="text" name="title" id="title" placeholder="Article Title" value="<?php echo isset($title)?$title:null; ?>">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter Content"><?php echo isset($content)? $content : null; ?></textarea>
    </div>
    <div>
        <label for="published_at">Published At</label>
        <input type="datetime-local" name="published_at" id="published_at" placeholder="published At" value="<?php echo isset($published_at) ? $published_at : null; ?>" >
    </div>
    <div>
        <button type="submit" name="add_article">Add Article</button>
    </div>
</form>
<?php require_once "includes/footer.php"; ?>