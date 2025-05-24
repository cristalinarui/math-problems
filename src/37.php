<?php
function calculateArea($side1, $side2) {
    // Calculate area of rectangle
    $area = $side1 * $side2;
    return $area;
}

// Example usage
$side1 = 5;
$side2 = 3;
$result = calculateArea($side1, $side2);
echo "The area of the rectangle is: " . $result;
?>
