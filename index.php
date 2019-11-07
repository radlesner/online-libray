<?php

    session_start();

    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: panel_user.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login_panel.css">

    <title>Biblioteka online - Logowanie</title>
</head>
<body>
    <div id="container_login">
        <form action="user_php_scripts/authorization.php" method="post">
            <input type="submit" value="Zaloguj się">

            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">
        </form>
    </div>
    <div id="container_register">
        <header>Rejestracja</header>
        <form action="user_php_scripts/register_new_user.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">
            <input type="password" name="re_password" placeholder="Powtórz hasło">

            <input type="submit" value="Zajerestruj się">
        </form>

        <?php
            if (isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>
    </div>
    <!-- <script src="js/login_listeners.js"></script> -->
</body>
</html>