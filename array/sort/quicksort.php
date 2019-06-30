<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 15:34
 */


function quick_sort_tail($arr) {
    $len = count($arr);

    if ($len <= 1)
        return $arr;

    $left = $right = array();
    $mid_value = $arr[0];

    for ($i = 1; $i < $len; $i++)
        if ($arr[$i] < $mid_value)
            $left[] = $arr[$i];
        else
            $right[] = $arr[$i];

    return array_merge(quick_sort($left), (array)$mid_value, quick_sort($right));
}


function quick_sort($arr) {
    $len = count($arr);

    if ($len <= 1)
        return $arr;

    $left = $right = array();
    $mid_index = $len>>1;
    $mid_value = $arr[$mid_index];

    for ($i = 0; $i < $len; $i++) {
        if ($i == $mid_index)
            continue;

        if ($arr[$i] < $mid_value)
            $left[] = $arr[$i];
        else
            $right[] = $arr[$i];
    }

    return array_merge(quick_sort($left), (array)$mid_value, quick_sort($right));
}


$start = microtime(true);
$arr = array(21, 21,34, 3, 32, 82, 55, 89, 50, 37, 5, 64, 35, 9, 70);
$arr = quick_sort($arr);
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . ' ';
}
$excute_time = $api_start_excute_time - time();
$excute_time = (microtime(true) -  $api_start_excute_time) * 1000;
$excute_time =  sprintf("%d ms", $excute_time);
echo "以中间元素为基准:".$excute_time.PHP_EOL;

$start = microtime(true);
$arr = array(21,21, 34, 3, 32, 82, 55, 89, 50, 37, 5, 64, 35, 9, 70);
$arr = quick_sort_tail($arr);
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . ' ';
}
$excute_time = $api_start_excute_time - time();
$excute_time = (microtime(true) -  $api_start_excute_time) * 1000;
$excute_time =  sprintf("%d ms", $excute_time);
echo "从尾部元素为基准:".$excute_time.PHP_EOL;