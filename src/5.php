<?php
function getRandomMathProblem() {
    // Generate a random number between 1 and 10
    $num1 = rand(1, 10);
    // Generate another random number between 1 and 10
    $num2 = rand(1, 10);
    // Determine the operator (+, -, *, or /)
    $operator = ["+", "-", "*", "/"][rand(0, 3)];
    // Return the problem in a string
    return "$num1 $operator $num2";
}
?>