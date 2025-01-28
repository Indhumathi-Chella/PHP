<?php

// Initial variable assignments
$a = 5;          // int
$b = 10;         // int
$c = 3.5;        // float
$d = "Hello";    // string
$e = true;       // boolean

// Arithmetic expressions
$sum = $a + $b;          // $sum is 5 + 10 = 15
$product = $a * $c;      // $product is 5 * 3.5 = 17.5
$division = $b / $a;     // $division is 10 / 5 = 2
$modulus = $b % $a;      // $modulus is 10 % 5 = 0

// Pre-increment and post-increment
$preIncrement = ++$a;   // $a=6
$postIncrement = $b++;  // $postIncrement gets 10 (original $b value), then $b becomes 11

// Comparison expressions
$isEqual = ($a == $b);   // (6) == (11), false
$isNotEqual = ($a != $b); // (6) != (11), true
$isGreaterThan = ($a > $b); // (6) > (11), false
$isLessThan = ($a < $b);  // (6) < (11), true

// Logical expressions
$isTrue = ($e && $isEqual); // $e (true) && $isEqual (false), so $isTrue is false
$isFalse = ($e || $isEqual); // $e (true) || $isEqual (false), so $isFalse is true

// Ternary operator example
$result = ($isEqual) ? "Equal" : "Not Equal";  // $isEqual is false, result is "Not Equal"

// Function call expression
function double($num) {
    return $num * 2;
}
$doubleValue = double($a);  // $doubleValue is 6 * 2 = 12

// Operator-assignment example
$a += 2;  // $a = 6 + 2 = 8
$b -= 3;  // $b = 11 - 3 = 8
$c *= 2;  // $c = 3.5 * 2 = 7.0
$d .= " World!"; // String concatenation: $d = "Hello World!"

// String concatenation expression
$greeting = $d . " The sum is " . $sum; //  "Hello World! The sum is 15"

// Final output
echo "a: $a, b: $b, c: $c, d: $d, e: $e\n";  // a: 8, b: 8, c: 7, d: Hello World!, e: 1
echo "Sum: $sum, Product: $product, Division: $division, Modulus: $modulus\n"; // Sum: 15, Product: 17.5, Division: 2, Modulus: 0
echo "Post Increment: $postIncrement, Pre Increment: $preIncrement\n";  // Post Increment: 10, Pre Increment: 6
echo "Is Equal: $isEqual, Is Not Equal: $isNotEqual\n";  // Is Equal: false, Is Not Equal: true
echo "Ternary Result: $result\n"; // Ternary Result: Not Equal
echo "Double Value: $doubleValue\n"; // Double Value: 12
echo "Greeting: $greeting\n";  // Greeting: Hello World! The sum is 15

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

