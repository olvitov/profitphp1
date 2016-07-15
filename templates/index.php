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

<?php foreach ($book as $line) : ?>
<article><?php echo $line->getMessage(); ?></article>


<?php endforeach; ?>


</body>
</html>
