<?php ob_start(); require_once "includes/database.php"; require_once "includes/article.php"; ?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = getDB();
    if(isset($_POST["add_article"])){
        //echo "<br>";
        //echo "<pre>",print_r($_POST),"</pre>";
        //echo "<br>";
        $error=[];
        $title = mysqli_real_escape_string($conn,trim($_POST["title"]));
        $content = mysqli_real_escape_string($conn,trim($_POST["content"]));
        $published_at = mysqli_real_escape_string($conn,trim($_POST["published_at"]));
       $error = validateArticle($title,$content,$published_at);
       // $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}'),('{$title}','{$content}','{$published_at}')";
       //$insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values ('{$title}','{$content}','{$published_at}')";

       if(empty($error)){
        $insert = "INSERT INTO `article`(`title`,`content`,`published_at`) values (?,?,?)";
        $smt= mysqli_prepare($conn,$insert);
        if($smt){
                mysqli_stmt_bind_param($smt,'sbs',$title,$content,$published_at);
                if(mysqli_stmt_execute($smt)){
                    var_dump("Inserted");
                    //var_dump(mysqli_insert_id($conn));
                    $id = mysqli_insert_id($conn);
                    if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]!="off"){
                        $protocol = "https";
                    }else{
                        $protocol = "http";
                    }
                    header("Location: {$protocol}://{$_SERVER["HTTP_HOST"]}/phpforbeginners/12_AnIntroductionToFunctionsAndValidationInPHP/article.php?id=$id");
                    header("Location: article.php?id=$id"); // development
                    die();
                    unset($title);
                    unset($content);
                    unset($published_at);
                }else{
                    var_dump("Error");
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
require_once "includes/article-form.php"; ?>
<?php require_once "includes/footer.php"; ob_end_flush(); ?>
