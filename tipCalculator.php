<?php

/*
Complete the function, which calculates how much you need to tip based on the total amount of the bill and the service.

You need to consider the following ratings:

Terrible: tip 0%
Poor: tip 5%
Good: tip 10%
Great: tip 15%
Excellent: tip 20%
The rating is case insensitive (so "great" = "GREAT"). If an unrecognised rating is received, then you need to return:

"Rating not recognised" in Javascript, Python and Ruby...
...or null in Java
...or -1 in C#
Because you're a nice person, you always round up the tip, regardless of the service.

*/

$amount = 15;
$rating = 'gfff';

echo calculateTip($amount, $rating);

function calculateTip($amount, $rating)
{ 
    switch(strtoupper($rating))
    {
        case('TERRIBLE') :
            return $amount * 0;
        case('POOR'):
            return $amount * .05;
        case('GOOD'):
            return $amount * .1;
        case('GREAT') :
            return $amount * .15;
        case('EXCELLENT'):
            return $amount * .2;
        default:
            return 'Rating not recognized';
    }
    
}