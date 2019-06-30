<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 14:47
 */

$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

print_r($ar1);
print_r($ar2);

$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
);
array_multisort($ar[0], SORT_ASC, SORT_STRING,
    $ar[1], SORT_NUMERIC, SORT_DESC);
print_r($ar);

/*
 array(4) {
  [0] =>
  int(0)
  [1] =>
  int(10)
  [2] =>
  int(100)
  [3] =>
  int(100)
}

array(4) {
  [0] =>
  int(4)
  [1] =>
  int(1)
  [2] =>
  int(2)
  [3] =>
  int(3)
}

array(2) {
  [0] =>
  array(5) {
    [0] =>
    string(2) "10"
    [1] =>
    int(100)
    [2] =>
    int(100)
    [3] =>
    int(11)
    [4] =>
    string(1) "a"
  }
  [1] =>
  array(5) {
    [0] =>
    int(1)
    [1] =>
    int(3)
    [2] =>
    string(1) "2"
    [3] =>
    int(2)
    [4] =>
    int(1)
  }
}
 */