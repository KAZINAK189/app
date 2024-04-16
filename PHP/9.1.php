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

        <label for="group">Группа:</label>
        <input type="text" name="group" id="group" required><br><br>

        <label for="gender">Пол:</label>
        <label for="male">Мужской</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="female">Женский</label>
        <input type="radio" name="gender" id="female" value="female" required><br><br>

        <label for="birthday">День рождения:</label>
        <select name="birthday" id="birthday" required>
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>

        <label for="birthmonth">Месяц:</label>
        <select name="birthmonth" id="birthmonth" required>
            <?php $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
            foreach ($months as $month): ?>
                <option value="<?= array_search($month, $months) + 1 ?>"><?= $month ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="birthyear">Год:</label>
        <select name="birthyear" id="birthyear" required>
            <?php for ($i = date('Y') - 1900; $i >= 2021 - 1900; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>

        <label for="license">Наличие водительского удостоверения:</label>
        <input type="checkbox" name="license" id="license" value="true"><br><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $group = $_POST['group'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $birthmonth = $_POST['birthmonth'];
        $birthyear = $_POST['birthyear'];
        $license = isset($_POST['license']);

        $birthdate = new DateTime("$birthyear-$birthmonth-$birthday");
        $now = new DateTime();
        $age = $birthdate->diff($now)->y;

        $retirement = $gender === 'male' ? 65 : 63;
        $retirement_date = (new DateTime("$birthyear-$birthmonth-$birthday"))->add(new DateInterval("P$ageY$retirementM"));
        $years_to_retirement = $retirement_date->diff($now)->y;

        echo "<p>Ваш возраст: $age</p>";
        echo "<p>До пенсии осталось: $years_to_retirement лет</p>";
    }
    ?>
</body>
</html>
