<?php
// Example PHP code for practicing mathematics with constants and variables

// Define a constant for pi
const PI = 3.14159;

// Calculate area of a circle
$radius = 5;
$area = PI * $radius ** 2;
echo "The area of the circle is: " . $area;

// Define an array with some sample data
$data = [
    "name" => "John",
    "age" => 18,
    "city" => "New York"
];

// Print the array to the console
print_r($data);

// Calculate and print the sum of two numbers
$number1 = 4;
$number2 = 6;
$total = $number1 + $number2;
echo "The sum of $number1 and $number2 is: " . $total;

// Print a PHP error message with a specific message
error_reporting(E_ERROR | E_PARSE);
if (file_exists('not_found.php')) {
    echo "File not found, please check the path.";
} else {
    echo "File exists, continuing.";
}
?>
