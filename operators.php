<?php
// Operator Precedence Example
$result = 1 + 5 * 3; // Mul has higher precedence than add
echo "Operator Precedence: $result\n"; // Output: 16
$result = (1 + 5) * 3;
echo "With Parentheses: $result\n"; // Output: 18

// Arithmetic Operators
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "\n";        // Output: 13
echo "Subtraction: " . ($a - $b) . "\n";     // Output: 7
echo "Multiplication: " . ($a * $b) . "\n";  // Output: 30
echo "Division: " . ($a / $b) . "\n";        // Output: 3.3333
echo "Modulus: " . ($a % $b) . "\n";         // Output: 1
echo "Exponentiation: " . ($a ** $b) . "\n"; // Output: 1000

// Increment and Decrement Operators
$count = 5;
echo "Pre-Increment: " . (++$count) . "\n";  // Output: 6
echo "Post-Decrement: " . ($count--) . "\n"; // Output: 6
echo "After Decrement: $count\n";            // Output: 5

// Assignment Operators
$a = 10;
$a += 5; 
echo "Assignment (+=): $a\n"; // Output: 15

// Bitwise Operators
$x = 6;  
$y = 3;  
echo "Bitwise AND: " . ($x & $y) . "\n";  // Output: 2 
echo "Bitwise OR: " . ($x | $y) . "\n";   // Output: 7 
echo "Bitwise XOR: " . ($x ^ $y) . "\n";  // Output: 5 
echo "Left Shift: " . ($x << 1) . "\n";   // Output: 12 
echo "Right Shift: " . ($x >> 1) . "\n";  // Output: 3 

// Comparison Operators
echo "Equal: " . (($a == 15) ? "true" : "false") . "\n"; // Output: true
echo "Identical: " . (($a === "15") ? "true" : "false") . "\n"; // Output: false
echo "Spaceship: " . (10 <=> 15) . "\n"; // Output: -1 

// Error Control Operators
$fileContent = @file_get_contents("nonexistent.txt"); 
echo "Error Control: " . ($fileContent === false ? "Error suppressed" : $fileContent) . "\n";

// Execution Operators
$output = `echo "Hello from shell"`; 
echo "Execution: $output\n"; // Output: Hello from shell

// Logical Operators
$logical = (true && false) || true;
echo "Logical: " . ($logical ? "true" : "false") . "\n"; // Output: true

// String Operators
$str1 = "Hello";
$str2 = " World";
echo "String Concatenation: " . ($str1 . $str2) . "\n"; // Output: Hello World

// Array Operators
$array1 = ["a" => 1, "b" => 6];
$array2 = ["b" => 3, "c" => 4];
$union = $array1 + $array2; 
print_r($union); // Output: Array ( [a] => 1 [b] => 6 )

// Type Operators
class Sample {}
$object = new Sample();
echo "Type Check: " . ($object instanceof Sample ? "true" : "false") . "\n"; // Output: true
?>

