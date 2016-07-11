<?php include __DIR__ . '/func.php'; ?>
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
<?php echo $user; ?>

</li>
<?php endforeach; ?>
    </ul>




</body>
</html>
