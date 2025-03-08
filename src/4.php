
<?php

// Generate a random math problem using PHP's built-in functions
$num1 = rand(0, 10);
$num2 = rand(0, 10);
$operator = ['+', '-', '*', '/'][rand(0, 3)];

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            continue 2;
        }
        $result = $num1 / $num2;
        break;
}

// Print the problem and the solution
echo "$num1 $operator $num2 = ?";
echo "<br>";
echo "Answer: $result";

?>