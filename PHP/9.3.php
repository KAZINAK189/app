<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <style>
        .error {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars(isset($_POST['name']) ? $_POST['name'] : '') ?>" required>
        <?php if (isset($_POST['name']) && empty($_POST['name'])): ?>
            <p>Поле имя не заполнено</p>
            <input type="text" name="name" id="name" class="error">
        <?php endif; ?><br><br>

        <label for="group">Группа:</label>
        <input type="text" name="group" id="group" value="<?= htmlspecialchars(isset($_POST['group']) ? $_POST['group'] : '') ?>" required>
        <?php if (isset($_POST['group']) && empty($_POST['group'])): ?>
            <p>Поле группа не заполнено</p>
            <input type="text" name="group" id="group" class="error">
        <?php endif; ?><br><br>

        <label for="gender">Пол:</label>
        <label for="male">Мужской</label>
        <input type="radio" name="gender" id="male" value="male" <?= isset($_POST['gender']) && $_POST['gender'] === 'male' ? 'checked' : '' ?> required>
        <label for="female">Женский</label>
        <input type="radio" name="gender" id="female" value="female" <?= isset($_POST['gender']) && $_POST['gender'] === 'female' ? 'checked' : '' ?> required><br><br>

        <label for="birthday">День рождения:</label>
        <select name="birthday" id="birthday" required>
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>" <?= isset($_POST['birthday']) && $_POST['birthday'] == $i ? 'selected' : '' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>

        <label for="birthmonth">Месяц:</label>
        <select name="birthmonth" id="birthmonth" required>
            <?php $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
            foreach ($months as $month): ?>
                <option value="<?= array_search($month, $months) + 1 ?>" <?= isset($_POST['birthmonth']) && $_POST['birthmonth'] == (array_search($month, $months) + 1) ? 'selected' : '' ?>><?= $month ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="birthyear">Год:</label>
        <select name="birthyear" id="birthyear" required>
            <?php for ($i = date('Y') - 1900; $i >= 2021 - 1900; $i--): ?>
                <option value="<?= $i ?>" <?= isset($_POST['birthyear']) && $_POST['birthyear'] == $i ? 'selected' : '' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select><br><br>

        <label for="license">Наличие водительского удостоверения:</label>
        <input type="checkbox" name="license" id="license" value="true" <?= isset($_POST['license']) ? 'checked' : '' ?>>
        <br><br>

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

        if (empty($name) || empty($group)) {
            return;
        }

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
