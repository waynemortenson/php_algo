<?php

/*
Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]

For the beginner, try to use the map method - it comes in very handy quite a lot so is a good one to know.

*/

$a = [1,2,3];

 print_r(maps($a));

function maps($a)
{
    return array_map(function($v){return $v * 2; }, $a);
}