<?php
require_once "./includes/database.php";
$select_query = "SELECT * FROM `article` ORDER BY published_at";
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
                        <h2><a href="article.php?id=<?=$article["id"];?>"><?=$article["title"];?></a></h2>
                        <p><?=$article["content"];?></p>
                    </article>
                </li>
            <?php } ?>
        </ul>
         <?php }else{
            echo PHP_EOL."No Articles Found".PHP_EOL;
        } ?>
<?php require_once "./includes/footer.php"; ?>
 