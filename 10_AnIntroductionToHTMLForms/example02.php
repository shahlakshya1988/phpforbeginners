<?php 
/**
 * some data is confidential for that we have to 
 * post method so that the data is not shown in query string, 
 * on shared computer get method url is stored in browser history
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Elements</title>
</head>
<body>
    <form action="processform.php" method="POST">
        <div>
            <input type="text" name="search">
        </div>
        <div>
            <input type="submit" name="submit" value="Search">
        </div>
    </form>
</body>
</html>