<?php
$title = "This is my title";
$para = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque blanditiis dolore, doloribus ea eaque numquam officiis placeat quae quaerat recusandae rem temporibus tenetur vel vero? Dignissimos ex facere incidunt itaque laborum voluptas voluptates! Animi, nulla rem. Dolorum, facere, harum ipsum mollitia nesciunt nisi, non nulla possimus quos reiciendis sapiente!";
$main_heading = "Main Heading";
$subheading = "Sub Heading";
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
    <h1><?php echo $main_heading; ?></h1>
    <h2><?php echo $subheading; ?></h2>
    <p><?php echo $para; ?></p>
</body>
</html>