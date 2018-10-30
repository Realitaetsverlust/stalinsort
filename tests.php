<?php

include_once 'Stalin.class.php';

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

shuffle($array);

var_dump($array);

$result = Stalin::sort($array, 'DESC');


var_dump($result);