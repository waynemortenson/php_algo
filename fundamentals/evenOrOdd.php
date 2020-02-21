<?php
//Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.

echo even_or_odd(8);

function even_or_odd($n)
{
    return $n%2?'Odd':'Even';
}