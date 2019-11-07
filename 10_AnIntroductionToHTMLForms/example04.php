<?php 
if(isset($_POST["submit"])){
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="firstname" value="" placeholder="First Name">
        <input type="text" name="surname" value="" placeholder="Surname">
        <input type="text" name="username"  value="username0">
        <input type="text" name="username" value="username1">
        <!-- <input type="submit" name="submit" value="hello"> -->
        <button type="submit" name="submit_button">More Prefered Way</button>
    </form>
</body>
</html>