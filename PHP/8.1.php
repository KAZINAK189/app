<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" min="1" max="120" required><br><br>

        <label for="gender">Пол:</label>
        <label for="male">Мужской</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="female">Женский</label>
        <input type="radio" name="gender" id="female" value="female" required><br><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        echo "<p>Здравствуйте, {$name}, Вы указали данные: Возраст {$age} и Пол {$gender}</p>";
    }
    ?>
</body>
</html>
