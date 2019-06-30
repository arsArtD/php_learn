<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 2019/6/18
 * Time: 10:22
 */


//rsort — Sort an array in reverse order
//可选参数同sort

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

/*
0 = orange
1 = lemon
2 = banana
3 = apple
 */