<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 11:15
 */

//arsort — Sort an array in reverse order and maintain index association----降序排列

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
a = orange
d = lemon
b = banana
c = apple
 */