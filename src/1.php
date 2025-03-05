<?php
function getRandomMathProblem($min = 1, $max = 10) {
    $number1 = mt_rand($min, $max);
    $number2 = mt_rand($min, $max);
    return "$number1 + $number2";
}
?>