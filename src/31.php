<?php
function calculateArea($side1, $side2, $side3) {
    $semiPerimeter = (sqrt(4 + 8 - 8 * sqrt(1 + 0.25))) / 2;
    return $semiPerimeter;
}

// Example usage:
$area = calculateArea(5, 5, 7);
echo "The area is: " . $area;
?>
