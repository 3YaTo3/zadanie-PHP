<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wersja z PHP Zad1</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="pass" placeholder="hasło">
        <input type="submit" name="submit" value="Zaloguj się">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        
        if ($login === "admin" && $pass === "test") {
            echo "Zalogowano!";
        } else {
            echo "Niepoprawny login lub hasło.";
        }
    }
    ?>
</body>
</html>