<?php

    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach ($strings as $string) {
        // Counting vowels
        $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);
        
        // Reversing the string
        $reversedString = strrev($string);
        
        // Output
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
    }

?>