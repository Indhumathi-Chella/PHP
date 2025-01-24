<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
<?php
// 1. Define a custom constant
define("SITE_NAME", "My Awesome Website");
define("MAX_USERS", 100);
define("_NAME", "Indhu");
define("NAME_2", "Mathi");

echo "Website Name: " .SITE_NAME;
echo "<br>Max Users Allowed: " . MAX_USERS ;
echo "<br>Welcome," ._NAME;
echo "<br>Welcome," .NAME_2;

//  Predefined constants
echo "<br>PHP Version: " . PHP_VERSION . PHP_EOL;
echo "<br>PHP Operating System: " . PHP_OS . PHP_EOL;
echo "<br>PHP Max Integer Value: " . PHP_INT_MAX . PHP_EOL;
echo "<br>PHP Min Integer Value: " . PHP_INT_MIN . PHP_EOL;
echo "<br>PHP_EOL constant: " . PHP_EOL . PHP_EOL;
echo PHP_EOL;


// magic constants
echo "<br>Current Line: " . __LINE__ . PHP_EOL;
echo "<br>Current File: " . __FILE__ . PHP_EOL;
echo "<br>Current Directory: " . __DIR__ . PHP_EOL;
echo "<br>Current Function: " . (function_exists('__FUNCTION__') ? __FUNCTION__ : "None") . PHP_EOL;
echo "<br>Current Method: " . (method_exists('Test', '__METHOD__') ? __METHOD__ : "None") . PHP_EOL;
echo PHP_EOL;



?>

</body>
</html>