<?php
// Set the correct HTTP header to authentication dialog
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    // Send headers for Basic Authentication prompt
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    echo 'Authentication required.';
    exit;
}

// Define valid credentials 
$valid_username = 'Indhu';
$valid_password = 'Indhu@123';

// Check if the entered credentials are valid
if ($_SERVER['PHP_AUTH_USER'] != $valid_username || $_SERVER['PHP_AUTH_PW'] != $valid_password) {
   
    header('HTTP/1.0 401 Unauthorized');
    echo 'Invalid credentials!';
    exit;
}


echo "Welcome, $valid_username!";
?>
