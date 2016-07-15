<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$gb = new GuestBook(__DIR__ . '/db.txt');
$data = $gb->getAll();

$view = new View();
$view->assign('book', $data);
$view->display(__DIR__ . '/templates/index.php');

























