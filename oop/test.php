<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, user-scalable=, initial-scale=, maximum-scale=, minimum-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=">
    <title></title>
</head>
<body>

<?php

class SomeClass
{

}

class AnotherClass extends SomeClass
{

}

$obj = new SomeClass();

var_dump(
  $obj instanceof  stdClass
);




?>


</body>

</html>
