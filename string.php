<?php
// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    // Iterate over each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $originalString = $string;
    $reversedString = strrev($string);
    $vowelCount = countVowels($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $originalString, Vowel Count: $vowelCount, Reversed String: $reversedString\n\n";
}
?>
