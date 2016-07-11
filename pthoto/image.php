<?php

$num =  $_GET['file'];
$images = include __DIR__ . '/data.php';
?>

<img src="/img/<?php echo $images[$num]; ?>">
