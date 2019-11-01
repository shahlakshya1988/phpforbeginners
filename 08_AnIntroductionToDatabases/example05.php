<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="phpforbeginners_cms";
$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
//var_dump($conn);
$sql="SELECT * FROM `article` WHERE `id`>10";
$sql="SELECT * FROM `article`";
$select_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
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

    </header>
    <main>
        <?php if(mysqli_num_rows($select_query)){ ?>
            <ul>
                <?php while($result = mysqli_fetch_assoc($select_query)){?>
                    <li>
                        <article>
                            <h2><?=$result["title"];?></h2>
                            <p><?=$result["content"];?></p>
                        </article>
                    </li>
                <?php } ?>
            </ul>
            <ul>
                <?php mysqli_data_seek($select_query,0); while($result = mysqli_fetch_assoc($select_query)):?>
                    <li>
                        <article>
                            <h2><?=$result["title"];?></h2>
                            <p><?=$result["content"];?></p>
                        </article>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php }else{
            echo PHP_EOL."No Articles Found".PHP_EOL;
        } ?>
    </main>
</body>
</html>
