<?php

/*
Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

Return your answer as a number.

*/

$a = ['5', 4];

echo sum_mix($a);

function sum_mix($a)
{
    return array_sum($a);
}
