<?php

/*
Write a function to split a string and convert it into an array of words. For example:

"Robin Singh" ==> ["Robin", "Singh"]

"I love arrays they are my favorite" ==> ["I", "love", "arrays", "they", "are", "my", "favorite"]

*/

$string = 'Robin Singh';
print_r(stringToArray($string));

function stringToArray($string)
{
    return explode(" ", $string);
}