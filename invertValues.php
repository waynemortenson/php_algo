<?php

/*
Given a set of numbers, return the additive inverse of each. Each positive becomes negatives, and the negatives become positives.

invert([1,2,3,4,5]) == [-1,-2,-3,-4,-5]
invert([1,-2,3,-4,5]) == [-1,2,-3,4,-5]
invert([]) == []
*/

$array = [1,2,-3,4,5];

function inverse($n)
{
    return $n * -1;
}

print_r(array_map('inverse', $array));

