<?php
$str = "123";
$value = implode('|', (array)$str);
var_dump($value);


$d0 = '2010-02-21 00:00';

$d1 = '2010-02-22 23:30';

$_time = range(strtotime($d0), strtotime($d1), 60);

$_time = array_map(create_function('$v', 'return date("Hi", $v);'), $_time);

print_r($_time);