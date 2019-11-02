<?php
$db_host="localhost";
$db_name="phpforbeginners_cms";
$db_user="root";
$db_pass="";
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$select_query = "SELECT * FROM `article` where id='1' ORDER BY published_at";
$result_query = mysqli_query($conn,$select_query);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?="Articles"?></title>
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <main>
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
        
    </main>
</body>
</html>
