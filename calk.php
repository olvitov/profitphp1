<?php

$x = $_POST['x'];

$act = $_POST['act'];

$y = $_POST['y'];

// $res = $x + $y;

switch ($act) {

    case  '+': echo $res = $x + $y;
    break;

    case  '-': echo $res = $x - $y;
        break;

    case  '*': echo $res = $x * $y;
        break;

    case  '/': echo $res = $x / $y;
        break;

}
