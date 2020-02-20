<?php


/*Complete the square sum function so that it squares each number passed into it and then sums the results together.

For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.

*/
$numbers = [1, 2, 3, 4, 5, 6, 7];
echo square_sum($numbers);

function square_sum($numbers)
{

    $array = array();


    $len = count($numbers);


    for ($i = 0; $i < $len; $i++) 
    {
        array_push($array, $numbers[$i] * $numbers[$i]);
    }


    return array_sum($array);
}
