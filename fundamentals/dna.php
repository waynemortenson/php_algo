<?php

/*
*Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.

If you want to know more http://en.wikipedia.org/wiki/DNA

In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". You have function with one side of the DNA (string, except for Haskell); you need to get the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).

More similar exercise are found here http://rosalind.info/problems/list-view/ (source)

DNA_strand("ATTGC") // returns "TAACG"
DNA_strand("GTAT") // returns "CATA"
*/


// $comp1 = array('A', 'T', 'C', 'G');
// $comp2 = array('T', 'T', 'T', 'T');

// echo str_replace($comp1, $comp2, 'ATTGC');


// $string = 'GTAT';
// $compString = '';
// $len = strlen($string);

// for ($i = 0; $i < $len; $i++) {
//     switch ($string[$i]) {
//         case 'A':
//             $compString .= 'T';
//             break;

//         case 'T':
//             $compString .= 'A';
//             break;

//         case 'C':
//             $compString .= 'G';
//             break;

//         case 'G':
//             $compString .= 'C';
//             break;
//     }
// }

// echo $compString;



//A better approach - php has strtr
function DNA_strand($dna)
{
    return strtr($dna, 'ACGT', 'TGCA');
}

echo DNA_strand('ATTGC');