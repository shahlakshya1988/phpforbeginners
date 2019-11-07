<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Labels and Input</title>
</head>
<body>
    <div>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="" placeholder="Enter First Name">
    </div>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male">
    </div>
    <div>
        <label for="female">Femal</label>
        <input type="radio" name="gender"  id="female" value="female">
    </div>
    <div>
        Hobbies <br>
        <input type="checkbox" name="hobbies[]" id="football" value="Football">
        <label for="football">Football</label>
    </div>
</body>
</html>