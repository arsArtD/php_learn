<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:24
 */

//uasort — Sort an array with a user-defined comparison function and maintain index association

// Comparison function
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Array to be sorted
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
print_r($array);

// Sort and print the resulting array
uasort($array, 'cmp');
print_r($array);


// procedural:
//uasort($collection, 'my_sort_function');

// Object Oriented
//uasort($collection, array($this, 'mySortMethod'));

// Objet Oriented with static method
//uasort($collection, array('self', 'myStaticSortMethod'));