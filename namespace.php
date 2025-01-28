<?php
// Declare a namespace at the top of the file
namespace MyProject\Utilities;

// Define a constant
const APP_NAME = "My Application";

// Define a class
class Helper {
    public static function greet($name) {
        return "Hello, $name! Welcome to " . APP_NAME;
    }
}

// Define a function
function getCurrentTime() {
    return date('Y-m-d H:i:s');
}
?>
