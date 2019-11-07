<?php
if(isset($_POST["submit"])){
    var_dump($_POST);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Control</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <select name="game" id="game">
                <option value="Football">Football</option>
                <option value="Cricket">Cricket</option>
                <option value="Snooker">Snooker</option>
            </select>
        </div>
        <div>
            <select name="game1" id="game1" multiple="">
                <option value="Football">Football</option>
                <option value="Cricket">Cricket</option>
                <option value="Snooker">Snooker</option>
            </select>
        </div>
         <div>
            <select name="game2[]" id="game2" multiple="">
                <option value="Football">Football</option>
                <option value="Cricket">Cricket</option>
                <option value="Snooker">Snooker</option>
            </select>
        </div>
        <button name="submit">Submit</button>
    </form>
</body>
</html>