<?php
require_once "./includes/database.php";
$id = mysqli_real_escape_string($conn,trim($_GET["id"]));
if(!isset($_GET["id"]) || !is_numeric($id) ){
    header("Location: index.php");
    die();
}
$select_query = "SELECT * FROM `article` where id='{$id}' ORDER BY published_at";
$result_query = mysqli_query($conn,$select_query);
?>
<?php require_once "./includes/header.php"; ?>
         <?php if(mysqli_num_rows($result_query)){ 
              //  $articles = mysqli_fetch_all($result_query,MYSQLI_ASSOC);
        ?>
        <ul>
            <?php while($article = mysqli_fetch_assoc($result_query)){ ?>
                <li>
                    <article>
                        <h2><?=$article["title"];?></h2>
                        <p><?=$article["content"];?></p>
                    </article>
                </li>
            <?php } ?>
        </ul>
         <?php }else{
            echo PHP_EOL."No Articles Found".PHP_EOL;
        } ?>
<?php require_once "./includes/footer.php"; ?>
