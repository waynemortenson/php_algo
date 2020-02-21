<?php

/*Get the number n (n>0) to return the reversed sequence from n to 1.
Example : n=5 >> [5,4,3,2,1]
*/

reversedSequence(5);

function reversedSequence($n)
{   
    $array = array();
    for($i=0;$i<$n; $i++)
    {
         array_unshift($array, ($i+1));
    }
    return $array;
}