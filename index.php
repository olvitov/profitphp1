


<?php
$code = $_GET['code'];
$img = [
    '1 Фото' => '/img/1.jpg',
    '2 Фото' => '/img/2.jpg',
    '3 Фото' => '/img/3.jpg',
    '4 Фото'=> '/img/4.jpg',
    '5 Фото' => '/img/5.jpg',
    
];

// echo $img[$code];

foreach ($img as $k =>  $item) {

echo '<a href = ' . $item . '>' . $k .'</a>';
    echo '<br />';
}

?>



<a href="/img/1.jpg" target="_blank">Link 1</a>




















