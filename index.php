<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$dsn = 'mysql: host=127.0.0.1;dbname=test';
$dbh = new PDO($dsn, 'root', '');

$sth =  $dbh->prepare('SELECT * FROM persons WHERE lastName=:name

');
$sth->execute([':name' => 'Перец']);

$data = $sth->fetchAll();







$view = new View();
$view->assign('persons', $data);
$view->display(__DIR__ . '/templates/index.php');

























