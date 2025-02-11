<?php

session_start();

// CLI Check for $_GET simulation
if (php_sapi_name() == 'cli') {
    $_GET['name'] = 'Indhu';
}

// $_GET Example
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, " . $name . "\n";
} else {
    echo "No name provided in the URL.\n";
}

// POST and Form Example
if (php_sapi_name() != 'cli') {
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'] ?? '';
        echo "Your email is: " . htmlspecialchars($email) . "\n";
    } else {
        echo '<form method="POST" action="">
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="submit" value="Submit">
              </form>';
    }
} else {
    // CLI Simulation for POST data
    echo "This script is running in CLI mode.\n";
    $_POST['email'] = 'indhu@gmail.com';
    echo "Simulated email: " . $_POST['email'] . "\n";
}

// Session Tracking
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$_SESSION['count']++;
echo "You have visited this page " . $_SESSION['count'] . " times.\n";
?>

