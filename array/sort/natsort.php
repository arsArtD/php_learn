<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:16
 */

$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n";
print_r($array1);

//sort($array2, SORT_NUMERIC);
//sort($array2, SORT_NATURAL);
natsort($array2);
echo "\nNatural order sorting\n";
print_r($array2);

/*
Standard sorting
Array
(
    [3] => img1.png
        [1] => img10.png
[0] => img12.png
[2] => img2.png
)

Natural order sorting
Array
(
    [3] => img1.png
        [2] => img2.png
[1] => img10.png
[0] => img12.png
)
*/