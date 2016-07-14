<?php include __DIR__ . '/index.php'; ?>
<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Гостевая</title>

    <h3>Гостевая книга</h3>
</head>
<body>
<ul>
    <?php

    foreach ($arr as $user): ?>
        <li>
            <?php echo $user . "\n"; ?>

        </li>
    <?php endforeach; ?>
</ul>
<form method="post" name="user" action="index.php">
    <label> Имя <input type="text" name="name"></label>
    <br><br>
    <input type="text" name="surname">
    <input type="submit" value="Ввод">
</form>





</body>
</html>
