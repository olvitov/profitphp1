<?php

$x = $_POST['x'];

$act = $_POST['act'];

$y = $_POST['y'];

// $res = $x + $y;
if ($act == '/' && 0 == $y) {

    echo 'Деление на 0 не возможно';
} else
    switch ($act) {

    case  '+':
         $res = $x + $y;
        break;

    case  '-':
         $res = $x - $y;
        break;

    case  '*':
         $res = $x * $y;
        break;

    case  '/':
         $res = $x / $y;
        break;
}


?>


<form action="/index.php" method="post">
<input type="text" name="x" >
 <select name="act">

     <option>+</option>
     <option>-</option>
     <option>/</option>
     <option>:</option>


 </select>
    <input type="text" name="y" value="<?php $_POST['y'] ?>">
    <input type="submit" value="=">

<?php
echo '<br />';
echo $_POST['x'] . $_POST['act'] . $_POST['y'] . '=' . $res; ?>


</form>


<a href="http://profitphp1/index.php?code=jan">Link</a>
<a href="http://profitphp1/index.php?code=feb">Link</a>



















