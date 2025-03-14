<?php

$problems = array(
    array("2 + 3", "5"),
    array("4 - 1", "3"),
    array("10 / 2", "5"),
    array("8 * 2", "16")
);

$correctAnswers = array();

foreach ($problems as $problem) {
    $question = $problem[0];
    $answer = $problem[1];

    $response = "I don't know";

    if (isset($_POST['submit'])) {
        $userAnswer = $_POST['user_answer'];

        if ($userAnswer == $answer) {
            $response = "Correct! The answer is $answer.";
        } else {
            $response = "Incorrect. The correct answer is $answer.";
        }
    }

    echo "<form method='post'><label for='user_answer'>$question</label> <input type='text' id='user_answer' name='user_answer' /> <input type='submit' name='submit' value='Check Answer' /></form> $response<br>";
}
?>