<?php
function solveProblem($problemId) {
    // Problem description
    $problem = new \Codeception\Util\Question();
    $answer = $problem->getAnswer($problemId);

    if ($answer == 'Correct') {
        echo "Congratulations! You got it right.\n";
    } else {
        echo "Oh no, you got it wrong. The correct answer is: " . $answer . ".\n";
    }
}

// Replace the following line with the actual problem id
$problemId = 1;
solveProblem($problemId);
?>
