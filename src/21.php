<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Define an array of numbers to choose from
$numbers = range(1, 50);

// Print the random number
echo "The random number is: $randomNumber";

// Shuffle the array in-place (though PHP doesn't have a direct shuffle function, we can use the random order)
shuffle($numbers);
array_splice($numbers, 0, 3); // Remove the first three elements

// Get a random element from the shuffled array
$selectedNumber = $randomNumber;

// Print the selected number and an error message if it's not between 1 and 50
if ($selectedNumber > 50 || $selectedNumber <= 1) {
    echo "Error: The chosen number must be between 1 and 50.";
} else {
    echo "You chose: $selectedNumber";
}
?>
