<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title>Гостевая книга</title>
    <style>
article {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px dotted green ;
}

    </style>
</head>
<body>

<h3>Текст записи</h3>

<?php foreach ($persons as $person) : ?>
<ul>
    <li><?php echo $person['lastName']; ?></li>
    <li><?php echo $person['firstName']; ?></li>



</ul>


<?php endforeach; ?>


</body>
</html>
