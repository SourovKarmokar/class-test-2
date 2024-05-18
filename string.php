<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($str)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}


function reverseString($str) {
    return strrev($str);
}


foreach ($strings as $originalString) {
    $vowelCount = countVowels($originalString);
    $reversedString = reverseString($originalString);
    
   
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
