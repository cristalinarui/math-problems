<?php
function getRandomMathProblem() {
  // Generate two random numbers between 1 and 10
  $num1 = mt_rand(1, 10);
  $num2 = mt_rand(1, 10);
  
  // Get a random operation (+, -, x, /)
  $op = array('+', '-', 'x', '/');
  $operation = $op[mt_rand(0, 3)];
  
  // Create the problem string
  if ($operation === '+') {
    return "$num1 + $num2 =";
  } elseif ($operation === '-') {
    return "$num1 - $num2 =";
  } elseif ($operation === 'x') {
    return "$num1 x $num2 =";
  } else {
    return "{$num1} / {$num2} =";
  }
}

// Call the function to get a random math problem
echo getRandomMathProblem();
?>