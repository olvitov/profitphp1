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

<a href="http://profitphp1/index.php?code=jan">Link</a>
<a href="http://profitphp1/index.php?code=feb">Link</a>



















