<?php

$arr = [1 => 1,  2 => 2, 3 => 3];

$arr[] = 4;

$months = [
    'jan' => Январь,
    'feb' => Февраль,
    'apr' => Март,
    'mar' => Апрель,

];

foreach ($months as $k => $month) {
    echo $k;
    echo '=';
    echo ($month);
    echo '<br>';
}


if(in_array('Январь', $months )) {

    echo 'Есть такой месяц';
}

$res = implode(':- ', $months);

echo $res;

$res1 = 'olvit, Tolik, Serg';

$res2 = explode(',' ,$res1);

var_dump($res2);
