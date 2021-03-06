<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:34
 */

//uksort — Sort an array by keys using a user-defined comparison function

/*
key_compare_func
The comparison function must return an integer less than,
equal to, or greater than zero if the first argument is considered to be respectively less than,
equal to, or greater than the second. Note that before PHP 7.0.0 this integer had to be in the range from -2147483648 to 2147483647.

callback ( mixed $a, mixed $b ) : int
*/

function cmp($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);

uksort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}

/*
an apple: 3
a banana: 4
the Earth: 2
John: 1
 */