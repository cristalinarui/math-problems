<?php
// This PHP script is designed to be part of a course or tutorial on mathematical concepts.
// You can use it as a reference or add your own content.

// Define constants for mathematical operations
define("SUM", "+");
define("SUBTRACT", "-");

// Main calculation function
function calculate($expression) {
    $parts = explode(" ", $expression);
    $leftPart = end($parts);
    $rightPart = join(" ", array_slice($parts, 0, -1));

    switch ($parts[0]) {
        case 'Add':
            return (int)$leftPart + int)$rightPart;
        case 'Subtract':
            return (int)$leftPart - int) SUBTRACT
        default:
            echo "Invalid operation: $expression\n";
    }
}

// Example usage
$expression1 = "5 + 3 * 2";
$expression2 = "4 - 1.5 + 7.8 - 0.9";

echo "Expression 1: " . calculate($expression1) . "\n";
echo "Expression 2: " . calculate($expression2) . "\n";
