<?php
$fruits = ["яблоко", "банан", "апельсин"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Заметки</title>
</head>

<body>
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="../index.html" class="nav__link">Любимый автомобиль</a>
            </li>
            <li class="nav__item">
                <a href="../days.html" class="nav__link">Дни в секунды</a>
            </li>
            <li class="nav__item">
                <a href="../calc.html" class="nav__link">Калькулятор</a>
            </li>
            <li class="nav__item">
                <a href="../test.html" class="nav__link">Тест</a>
            </li>
            <li class="nav__item">
                <a href="../game.html" class="nav__link">Угадай число</a>
            </li>
            <li class="nav__item">
                <a href="../list.html" class="nav__link">Список дел</a>
            </li>
            <li class="nav__item">
                <a href="/notes/index.php" class="nav__link">Заметки</a>
            </li>
        </ul>
    </nav>
    <h1 class="title">Добавить заметку</h1>
    <!-- Форма для добавления заметок, отправляющая данные на display_notes.php -->
    <form method="post" action="display_notes.php">
        <label for="name" class="title__sub">Название:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="category" class="title__sub">Категория:</label>
        <!-- Выбор категории из выпадающего списка -->
        <select id="category" name="category" required>
            <option value="Книга">Книга</option>
            <option value="Мультфильм">Мультфильм</option>
            <option value="Фильм">Фильм</option>
        </select><br>
        <input type="submit" value="Добавить">
    </form>
    <h2 class="subtitle">Заметки</h2>
    <table border="1">
        <tr>
            <th>Название</th>
            <th>Категория</th>
        </tr>
        <!-- Подключение display_notes.php -->
        <?php include 'display_notes.php'; ?>

    </table>

</body>


</html>