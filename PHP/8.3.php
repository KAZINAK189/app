<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замена букв</title>
</head>
<body>
    <form action="" method="post">
        <label for="word">Введите слово:</label>
        <input type="text" name="word" id="word" required><br><br>

        <input type="submit" value="Заменить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $word = $_POST['word'];
        $new_word = str_replace('а', 'о', $word);
        $new_word = str_replace('к', 'н', $new_word);

        echo "<p>Исходное слово: {$word}</p>";
        echo "<p>Измененное слово: {$new_word}</p>";
    }
    ?>
</body>
</html>
