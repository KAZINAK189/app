<!DOCTYPE html>
<html>
<head>
    <title>Проверка логина и пороля</title>
</head>
<body>
    <h1>Проверка логина и пороля</h1>

    <?php
    $valid_login = "admin";
    $valid_password = "password";

    $login = $_GET["login"];
    $password = $_GET["password"];

    if ($login == $valid_login && $password == $valid_password) {
        echo "<p>Логин и пороль введены правильно.</p>";
    } else {
        echo "<p>Логин и пороль введены неправильно.</p>";
    }
    ?>
</body>
</html>
