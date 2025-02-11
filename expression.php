<?php

// Initial variable assignments
$a = 5;          // int
$b = 10;         // int
$c = 3.5;        // float
$d = "Hello";    // string
$e = true;       // boolean

// Arithmetic expressions
$sum = $a + $b;         
$product = $a * $c;      
$division = $b / $a;     
$modulus = $b % $a;      

// Pre-increment and post-increment
$preIncrement = ++$a;   
$postIncrement = $b++;  

// Comparison expressions
$isEqual = ($a == $b);  
$isNotEqual = ($a != $b); 
$isGreaterThan = ($a > $b); 
$isLessThan = ($a < $b);  

// Logical expressions
$isTrue = ($e && $isEqual); 
$isFalse = ($e || $isEqual); 

// Ternary operator example
$result = ($isEqual) ? "Equal" : "Not Equal"; 

// Function call expression
function double($num) {
    return $num * 2;
}
$doubleValue = double($a);  

// Operator-assignment example
$a += 2;  
$b -= 3; 
$c *= 2;  
$d .= " World!"; 

// String concatenation expression
$greeting = $d . " The sum is " . $sum; 

// Final output
echo "a: $a, b: $b, c: $c, d: $d, e: $e\n";  
echo "Sum: $sum, Product: $product, Division: $division, Modulus: $modulus\n"; 
echo "Post Increment: $postIncrement, Pre Increment: $preIncrement\n"; 
echo "Is Equal: $isEqual, Is Not Equal: $isNotEqual\n"; 
echo "Ternary Result: $result\n";
echo "Double Value: $doubleValue\n"; 
echo "Greeting: $greeting\n"; 
?>
<?php
// Truthiness in PHP
$values = [
    false,      // Boolean false
    0,          // Integer zero
    0.0,        // Float zero
    "",         // Empty string
    "0",        // String containing zero
    null,       // Null value
    [],         // Empty array
    true,       // Boolean true
    1,          // Integer one
    -5,         // Negative integer
    3.14,       // Positive float
    "Hello",    // Non-empty string
    [1, 2, 3]   // Non-empty array
];

foreach ($values as $value) {
    if ($value) {
        echo "Truthy: ";
    } else {
        echo "Falsy: ";
    }
    var_dump($value);
    // echo $value;
}

?>

