<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My blog</h1>
    </header>
    <nav>
        <ul>
            <li> <a href="/index.php">Home</a> </li>
            <?php if(Auth::isLoggedIn()){ ?>
                <li> <a href="/admin/">Admin</a> </li>
                <li><a href="/logout.php">Log Out</a> </li>
            <?php }else{ ?>
                <li><a href="/login.php">Login</a> </li>

            <?php } ?>
        </ul>
    </nav>
    <main>
