<?php
$articles = [
    ["title"=>"First Article Title","content"=>"This is my First Post"],
    ["title"=>"Second Article Title","content"=>"This is my second Post"],
    ["title"=>"Third Article Title","content"=>"This is my third Post"]
];
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
        <ul>
            <?php foreach($articles as $article){ ?>
                <li>
                    <article>
                        <h2><?=$article["title"];?></h2>
                        <p><?=$article["content"];?></p>
                    </article>
                </li>
            <?php } ?>
        </ul>
        <ul>
            <?php foreach($articles as $article):?>
                <li>
                    <article>
                        <h2><?=$article["title"];?></h2>
                        <p><?=$article["content"];?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
