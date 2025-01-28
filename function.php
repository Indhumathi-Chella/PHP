<?php
// Define a simple function
function greet($name) {
    return "Hello, " . $name . "!";
}

// Call the function
echo greet("Indhu") . "\n";
?>

<?php
// Function with default parameter values
function calculateArea($length, $width = 5) {
    return $length * $width;
}

// Call the function with and without the second argument
echo "Area (with both values): " . calculateArea(10, 4) . "\n";
echo "Area (with default width): " . calculateArea(10) . "\n";
?>

<?php
// Function returning a value
function add($a, $b) {
    return $a + $b;
}

// Store and use the returned value
$result = add(3, 7);
echo "The sum is: " . $result . "\n";
?>


<?php
// Define two functions
function hello() {
    return "Hello!";
}
function goodbye() {
    return "Goodbye!";
}

// Use a variable to call a function
$func = "hello";
echo $func() . "\n";

$func = "goodbye";
echo $func() . "\n";
?>


<?php
// Example of using PHP's built-in functions
$str = "  Hello, PHP!  ";
echo "Original: " . $str . "\n";
echo "Trimmed: " . trim($str) . "\n";
echo "String length: " . strlen($str) . "\n";
?>


<?php
// Define an anonymous function and assign it to a variable
$multiply = function ($a, $b) {
    return $a * $b;
};

// Use the anonymous function
echo "Product: " . $multiply(4, 5) . "\n";
?>


<?php
// Arrow function (short syntax for anonymous functions)
$add = fn($a, $b) => $a + $b;

// Use the arrow function
echo "Sum: " . $add(10, 15) . "\n";
?>


<?php
class Math {
    public static function square($x) {
        return $x * $x;
    }
}

// Reference a method using first-class callable syntax
$squareFunc = Math::square(...);

// Call the function
echo "Square: " . $squareFunc(6) . "\n";
?>
