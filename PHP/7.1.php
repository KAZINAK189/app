<!DOCTYPE html>
<html>
<head>
    <title>Большее из двух чисел</title>
</head>
<body>
    <h1>Большее из двух чисел</h1>
    <?php
    $num1 = 10;
    $num2 = 20;
    if ($num1 > $num2) {
        $bigger = $num1;
    } else {
        $bigger = $num2;
    }
    echo "<p>Большее из двух чисел это: <strong>" . $bigger . "</strong></p>";
    ?>
</body>
</html>
