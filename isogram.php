<?php

//an isogram has no repeating chars, sequential or non.

$fail = 'Hello';
$pass = 'aBc';

//lowercase: strtolower;
//split string into array: str_split;

$array = str_split(strtolower($pass));

//compare the count of the array with the count of a unique form of the array
if (count($array) == count(array_unique($array))) {
    echo 'true';
} else {
    echo 'false';
}
