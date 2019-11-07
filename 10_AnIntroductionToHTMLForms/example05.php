<?php 
if(isset($_POST["textarea_submit"])){
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mutli Line Text Control</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit" name="textarea_submit" value="submit">Submit</button>
        </div>
    </form>
</body>
</html>