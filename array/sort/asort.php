<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 10:24
 */

//asort — Sort an array and maintain index association---根据值来进行升序

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits,SORT_STRING);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
c = apple
b = banana
d = lemon
a = orange
*/