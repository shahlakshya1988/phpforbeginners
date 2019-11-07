<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Only One Option</title>
</head>
<body>
    <form action="" method="POST">
        <div><input type="radio" name="gender" value="male" id="" checked> Male</div>
        <div><input type="radio" name="gender" value="female" id=""> Female</div>
        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>