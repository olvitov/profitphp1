<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title>ДЗ№8</title>
</head>
<body>

<h3>Домашнее задание №8</h3>

<?php

require __DIR__ . '/classes/DB.php';
$db = new DB();

var_dump($db);
die;


require __DIR__ . '/classes/news.php';
$news = new News();
$items = News::getAll();
include __DIR__ . '/views/index.php';

?>

</body>
</html>
