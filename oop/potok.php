<?php

ob_start();

echo 'Hello!';

$str = ob_get_contents();

ob_end_clean();


echo 'World!';
echo $str;
