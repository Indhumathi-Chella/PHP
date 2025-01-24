<?php
// Operator Precedence Example
$result = 1 + 5 * 3; // Mul has higher precedence than add
echo "Operator Precedence: $result<br>"; // Output: 16
$result = (1 + 5) * 3;
echo "With Parentheses: $result<br>"; // Output: 18

// Arithmetic Operators
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";        // Output: 13
echo "Subtraction: " . ($a - $b) . "<br>";     // Output: 7
echo "Multiplication: " . ($a * $b) . "<br>";  // Output: 30
echo "Division: " . ($a / $b) . "<br>";        // Output: 3.3333
echo "Modulus: " . ($a % $b) . "<br>";         // Output: 1
echo "Exponentiation: " . ($a ** $b) . "<br>"; // Output: 1000

// Increment and Decrement Operators
$count = 5;
echo "Pre-Increment: " . (++$count) . "<br>";  // Output: 6
echo "Post-Decrement: " . ($count--) . "<br>"; // Output: 6
echo "After Decrement: $count<br>";            // Output: 5

// Assignment Operators
$a = 10;
$a += 5; 
echo "Assignment (+=): $a<br>"; // Output: 15

// Bitwise Operators
$x = 6;  
$y = 3;  
echo "Bitwise AND: " . ($x & $y) . "<br>";  // Output: 2 
echo "Bitwise OR: " . ($x | $y) . "<br>";   // Output: 7 
echo "Bitwise XOR: " . ($x ^ $y) . "<br>";  // Output: 5 
echo "Left Shift: " . ($x << 1) . "<br>";   // Output: 12 
echo "Right Shift: " . ($x >> 1) . "<br>";  // Output: 3 

// Comparison Operators
echo "Equal: " . (($a == 15) ? "true" : "false") . "<br>"; // Output: true
echo "Identical: " . (($a === "15") ? "true" : "false") . "<br>"; // Output: false
echo "Spaceship: " . (10 <=> 15) . "<br>"; // Output: -1 

// Error Control Operators
$fileContent = @file_get_contents("nonexistent.txt"); 
echo "Error Control: " . ($fileContent === false ? "Error suppressed" : $fileContent) . "<br>";

// Execution Operators
$output = `echo "Hello from shell"`; 
echo "Execution: $output<br>"; // Output: Hello from shell

// Logical Operators
$logical = (true && false) || true;
echo "Logical: " . ($logical ? "true" : "false") . "<br>"; // Output: true

// String Operators
$str1 = "Hello";
$str2 = " World";
echo "String Concatenation: " . ($str1 . $str2) . "<br>"; // Output: Hello World

// Array Operators
$array1 = ["a" => 1, "b" => 6];
$array2 = ["b" => 3, "c" => 4];
$union = $array1 + $array2; 
print_r($union); // Output: Array ( [a] => 1 [b] => 6 )

// Type Operators
class Sample {}
$object = new Sample();
echo "Type Check: " . ($object instanceof Sample ? "true" : "false") . "<br>"; // Output: true
?>

