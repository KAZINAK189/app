<!DOCTYPE html>
<html>
<head>
    <title>Информация о числе</title>
</head>
<body>
    <h1>Информация о числе</h1>

    <?php
    $num = -5;
    if ($num > 0) {
        echo "<p> Число <strong>" . $num . "</strong> это положительное число.</p>";
    } elseif ($num < 0) {
        echo "<p> Число <strong>" . $num . "</strong> это отрицательное число.</p>";
    } else {
        echo "<p> Число <strong>" . $num . "</strong> это ноль.</p>";
    }
    ?>
</body>
</html>
