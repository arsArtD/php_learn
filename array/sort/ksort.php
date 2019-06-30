<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 10:31
 */

//ksort — Sort an array by key
//Sorts an array by key, maintaining key to data correlations. This is useful mainly for associative arrays.

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
a = orange
b = banana
c = apple
d = lemon
 */