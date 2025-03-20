<?php
function squareRoot($number) {
    if ($number < 0) {
        throw new Exception("Number must be non-negative.");
    }
    return sqrt($number);
}

try {
    echo "The square root of $number is: " . squareRoot(16); // Should print 4
} catch (Exception $e) {
    echo $e->getMessage();
}
