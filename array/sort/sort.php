<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 9:57
 */

//https://www.php.net/manual/en/array.sorting.php
//http://sourcefrog.net/projects/natsort/
//strnatcasecmp  strnatcmp strcasecmp strcmp


/*
SORT_REGULAR - compare items normally (don't change types)---默认排序方式
SORT_NUMERIC - compare items numerically
SORT_STRING - compare items as strings
SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
*/

//https://zh.wikipedia.org/wiki/%E5%BF%AB%E9%80%9F%E6%8E%92%E5%BA%8F

//Note: Like most PHP sorting functions, sort() uses an implementation of » Quicksort.
//The pivot is chosen in the middle of the partition resulting in an optimal time for already sorted arrays. This is however an implementation detail you shouldn't rely on.

//Warning
//Be careful when sorting arrays with mixed types values because sort() can produce unpredictable results.


$cars=array("porsche","BMW","Volvo");
$res = sort($cars);

var_dump($res,$cars);
/*
bool(true);
array(3) {
    [0] =>
  string(3) "BMW"
    [1] =>
  string(5) "Volvo"
    [2] =>
  string(7) "porsche"
}
*/