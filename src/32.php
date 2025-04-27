<?php
// This PHP script is designed to help students practice solving equations.
// It checks if a given number is even or odd and prints the result accordingly.

function checkEvenOdd($number) {
    // Determine if the number is even or odd
    $isEven = ($number % 2 == 0);
    
    echo "Is the number " . $number . " even? " . (int)$isEven ? "Yes" : "No";
}

// Example usage
checkEvenOdd(4);
checkEvenOdd(7);
