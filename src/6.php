<?php 
// function to get a random number between two numbers
function get_random_number($min, $max) {
    return mt_rand($min, $max);
}

// function to get a random math problem of the specified type (addition, subtraction, multiplication, division)
function get_random_problem($type) {
    switch ($type) {
        case 'addition':
            return get_random_number(1, 10) + get_random_number(1, 10);
            break;
        case 'subtraction':
            $a = get_random_number(1, 10);
            $b = get_random_number(1, 10);
            return "$a - $b";
            break;
        case 'multiplication':
            return get_random_number(1, 10) * get_random_number(1, 10);
            break;
        case 'division':
            $a = get_random_number(1, 10);
            $b = get_random_number(2, 5);
            return "$a / $b";
            break;
        default:
            throw new Exception("Invalid math problem type");
    }
}

// function to generate a random math problem
function get_random_math_problem() {
    $type = 'addition'; // choose a random math problem type
    switch (rand(1, 4)) {
        case 1:
            return get_random_problem('addition');
            break;
        case 2:
            return get_random_problem('subtraction');
            break;
        case 3:
            return get_random_problem('multiplication');
            break;
        case 4:
            return get_random_problem('division');
            break;
    }
}

// generate a random math problem
echo get_random_math_problem();
?>