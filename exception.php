<?php
function divide($a, $b) {
    if ($b === 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo "Result: " . divide(10, 2) . "\n"; // Result: 5
    echo "Result: " . divide(10, 0) . "\n"; // Error: Division by zero is not allowed.
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} finally {
    echo "Execution completed.\n"; // Execution completed.
}
?>


<?php
// custom exception 
class InvalidAgeException extends Exception {}

function checkAge($age) {
    if ($age < 18) {
        throw new InvalidAgeException("Age must be 18 or above.");
    }
    return "Age is valid.";
}

try {
    echo checkAge(22) . "\n";  // Age is valid.
    echo checkAge(16) . "\n";  // Validation Error: Age must be 18 or above.
    
} catch (InvalidAgeException $e) {
    echo "Validation Error: " . $e->getMessage() . "\n";
}



function sum($a,$b){
    if($a<0 || $b<0){
        throw new Exception("postive number only");

    }
    return $a+$b ;
}

try{
    echo sum(5,10) ."\n";    // 15
    echo sum(-2,6) ."\n";   //  Error:postive number only
}
catch (Exception  $e ){
    echo "Error:" . $e->getMessage() . "\n";
}
?>

