
<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess a number between 1 and 10: ";
$guess = trim(fgets(STDIN));

if ($guess === (string)$randomNumber) {
    echo "You are correct! The number was $randomNumber.";
} else {
    echo "Sorry, the number was actually $randomNumber. Try again!";
}
?>