
<?php
// 1. Define a custom constant
define("SITE_NAME", "My Awesome Website");
define("MAX_USERS", 100);
define("_NAME", "Indhu");
define("NAME_2", "Mathi");

echo "Website Name: " .SITE_NAME;
echo "\nMax Users Allowed: " . MAX_USERS ;
echo "\nWelcome," ._NAME;
echo "\nWelcome," .NAME_2;

//  Predefined constants
echo "\nPHP Version: " . PHP_VERSION . PHP_EOL;
echo "\nPHP Operating System: " . PHP_OS . PHP_EOL;
echo "\nPHP Max Integer Value: " . PHP_INT_MAX . PHP_EOL;
echo "\nPHP Min Integer Value: " . PHP_INT_MIN . PHP_EOL;
echo "\nPHP_EOL constant: " . PHP_EOL;
echo PHP_EOL;


// magic constants
echo "\nCurrent Line: " . __LINE__ . PHP_EOL;
echo "\nCurrent File: " . __FILE__ . PHP_EOL;
echo "\nCurrent Directory: " . __DIR__ . PHP_EOL;
echo "\nCurrent Function: " . (function_exists('__FUNCTION__') ? __FUNCTION__ : "None") . PHP_EOL;
echo "\nCurrent Method: " . (method_exists('Test', '__METHOD__') ? __METHOD__ : "None") . PHP_EOL;
echo PHP_EOL;



?>
