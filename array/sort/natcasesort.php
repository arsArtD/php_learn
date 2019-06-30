<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:21
 */

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
print_r($array1);

//natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);

/**
Standard sorting
Array
(
[0] => IMG0.png
[1] => IMG3.png
[2] => img1.png
[3] => img10.png
[4] => img12.png
[5] => img2.png
)

Natural order sorting (case-insensitive)
Array
(
[0] => IMG0.png
[4] => img1.png
[3] => img2.png
[5] => IMG3.png
[2] => img10.png
[1] => img12.png
)
 */