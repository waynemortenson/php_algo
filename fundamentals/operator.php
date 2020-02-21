<?php

//execute the operation depending on the given operator
echo test('/', 2, 2) . "\n";
echo test('*', 2, 2) . "\n";
echo test('-', 2, 2) . "\n";
echo test('+', 2, 2) . "\n";


//This works easily with a switch, or alternatively some if/ifelse statements
function test($op, $val1, $val2)
{
    switch($op)
    {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '*':
            return $val1 * $val2;
        case '/':
            return $val1 / $val2;
    }
}