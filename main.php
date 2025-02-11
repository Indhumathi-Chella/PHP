<?php
// Include the file with the namespace
require_once 'namespace.php';

// Import the namespace for convenience
use MyProject\Utilities;

// Access a constant from the namespace
echo "Application Name: " . Utilities\APP_NAME . PHP_EOL;

// Use a class from the namespace
echo Utilities\Helper::greet("Indhu") . PHP_EOL;

// Use a function from the namespace
echo "Current Time: " . Utilities\getCurrentTime() . PHP_EOL;
?>
