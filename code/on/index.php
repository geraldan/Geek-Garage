<?php
$login = "root";
$password = "root";

if(isset($_POST['login']) && $login == $_POST['login'] && $password == $_POST['password']) {
    session_start();
    /*session is started if you don't write this line can't use $_Session  global variable*/
    $_SESSION["connected"] = "yes";
    header('location: creationCentre.php');
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>RDV</title>
</head>
<body style="background-color: #888">
    <div style="height: 100vh">
        <form action="" method="POST">
            <h4>Connection</h4>
            <label for="">login</label>
            <input type="text" name="login" required>
            <label for="">password</label>
            <input type="text" name="password" required>
            <input type="submit" value="Connection">
        </form>
    </div>
</body>
</html>