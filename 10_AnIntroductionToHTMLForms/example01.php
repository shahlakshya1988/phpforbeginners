<?php 
/**
 * SERVER SENDS HTML TO THE BROWSER
 * FOR RECEIVING THE DATA WE NEED FORM
 * AFTER RECEIVING DATA WE CAN USE PHP FOR PROCESSING
 * FORM ELEMENTS ARE USED TO THIS PURPOSE
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
    <?php 
    /**
     * method POST, GET, IF BLANK THEN GET
     * If no action attribute is there then form is submited to the same page
     */
    ?>
    <form action="processform.php" method="">
        <div>
            <input type="text" name="search">
        </div>
        <div>
            <input type="submit" name="submit" value="Search">
        </div>
    </form>
</body>
</html>