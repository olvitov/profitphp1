<?php



echo '<hr>';
$code = $_GET['code'];
$months = [
    'jan' => Январь,
    'feb' => Февраль,
    'apr' => Март,
    'mar' => Апрель,

];




echo $months[$code];

?>


<form action="/calk.php" method="post">
<input type="number" name="x">
    +
    <input type="number" name="y">
    <input type="submit" value="=">



</form>


<a href="http://profitphp1/index.php?code=jan">Link</a>
<a href="http://profitphp1/index.php?code=feb">Link</a>



















