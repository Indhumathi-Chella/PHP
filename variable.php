<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    
<h4>PHP Variables</h4>

<?php

// Valid Declarations
$var = "value";             // Valid 
$Var = "Hello";             // Valid, case-sensitive
$_var = 25;                 // Valid, starts with underscore
$myVar123 = 42;             // Valid, includes numbers
$var_2 = 10;                // Valid, starts with a letter and includes an underscore & number
$$var = "dynamic";          // Valid, dynamic variable (variable variables)
$valid_variable = "PHP";    // Valid, underscores and letters
$Var2 = 100;                // Valid, starts with a letter
$_Valid = "true";           // Valid, starts with an underscore

// Invalid Declarations

// $4site = "invalid";         // Invalid, starts with a number
// $invalid-name = "oops";     // Invalid, contains a hyphen
// $@var = "error";            // Invalid, special character
// $#wrongVar = "no";          // Invalid, special character at start
// $123name = "wrong";         // Invalid, starts with a number


// Valid assignments
$myVar = &$validName;      // Assign by reference
$copy = $myVar;            // Assign by value

// predefined variables

// Using $_GET for form input
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!<br>";
} else {
    echo "No name provided.<br>";
}

// Using $_POST to handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    echo "Your email is: $email";
}

// Using $_SESSION for session handling
session_start();
$_SESSION['username'] = "JohnDoe";
echo $_SESSION['username'];

// variable scope

// Global Variables
$a = 10;
$b = 20;

function sum() {
    $a = 5;  
    $b = 10; 
    $sum = $a + $b;  
    echo "<br>sum with local: $sum<br>"; 
}

sum();

// Using Global Keyword
function sumGlobal() {
    global $a, $b; 
    $sumg = $a + $b;  
    echo "After sumGlobal() = $sumg<br>";  
}

// Using $GLOBALS array
function sumWithGlobals() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];  
    echo "After sumWithGlobals() call, b = $GLOBALS[b]<br>";  
}

// Using Static Variables
function counter() {
    static $count = 0; 
    $count++;  
    echo "Counter: $count<br>";  
}



// Using Superglobals 
function testSuperglobal() {
    $_POST['name'] = 'John Doe';
    echo "Superglobal POST Name: " . $_POST['name'] . "<br>";  
}

// Calling functions and demonstrating variable scope
echo "Initial values of global variables: a = $a, b = $b<br>";

// Sum using global keyword
sumGlobal();

// Sum using $GLOBALS array
sumWithGlobals();

// Static variable demonstration
counter();  
counter(); 
counter();  


// Demonstrating superglobal $_POST
testSuperglobal();  

// Final values of global variables
echo "Final values of global variables: a = $a, b = $b<br>";

?>  
<?php
$varName = 'greeting';  // Variable holding the name of the new variable
$$varName = 'Hello, PHP!';  // Creates a variable $greeting and assigns a value

echo $greeting;  // Outputs: Hello, PHP!

// with array
$a = ['var1', 'var2'];
${$a[0]} = 'Value 1'; 
${$a[1]} = 'Value 2'; 

echo $var1; // Output: Value 1
echo $var2; // Output: Value 2
?>

<?php

// class Properties

class Fruit {
    public $color = 'red';
    public $taste = 'sweet';
    public $type = 'apple';
}

$fruit = new Fruit();

$propertyName = 'taste';

echo "The taste of the fruit is: " . $fruit->$propertyName . "<br>";  // Outputs: The taste of the fruit is: sweet

$propertyName = 'color';
$fruit->$propertyName = 'green';  

echo "The color of the fruit is now: " . $fruit->color . "<br>";  // Outputs: The color of the fruit is now: green
?>

</body>
</html>