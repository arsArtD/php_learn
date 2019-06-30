<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:41
 */

//必须传递引用
function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return true;
}

$arr = [
    'a' => '1'
    ,'b' => '2'
    ,'c' => '3'
];

shuffle_assoc($arr);

var_dump($arr);