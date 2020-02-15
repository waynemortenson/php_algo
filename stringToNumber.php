<?php

//a function that can transform a string into a number
//stringToNumber("1234") === 1234

echo stringToNumber('1234');

function stringToNumber($string)
{
    return (int) $string;
}