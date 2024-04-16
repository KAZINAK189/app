<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Три числа</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Первое число:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Второе число:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Третье число:</label>
        <input type="number" name="num3" id="num3" required><br><br>

        <input type="submit" value="Определить мин и макс">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $min = min($num1, $num2, $num3);
        $max = max($num1, $num2, $num3);

        echo "<p>Минимальное число: {$min}</p>";
        echo "<p>Максимальное число: {$max}</p>";
    }
    ?>
</body>
</html>
