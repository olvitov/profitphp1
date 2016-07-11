<?php

function getUser() {

    $s = file(__DIR__ . '/user.txt');

    return $s;
}

$arr = getUser();


