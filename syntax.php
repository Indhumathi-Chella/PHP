<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax Examples</title>
</head>
<body>
    <h4>Basic Syntax</h4>
    <?php
        echo "Welcome to PHP";
    ?>
    <p>
        <?php echo 'Hello, Indhu'; ?>
    </p>

    <h4>PHP Tags</h4>
    <?php 
        echo 'This is the example of standard PHP tag';
    ?>

    <h4>Short PHP Tag</h4>
    <?= 'This is the example of short PHP tag' ?>

    <h4>Escaping from HTML</h4>
    <p>This is a plain HTML and will be displayed by the browser.</p>
    <?php
        // PHP block starts
        echo "<p>This part is processed by PHP and dynamically generated.</p>";
        // PHP block ends
    ?>
    <p>This is another plain HTML block, outside of PHP.</p> 

    <h4>Escaping Using Conditions</h4>
    <?php 
        $isLoggedIn = false; // Change this to true to test the other condition
    ?>

    <?php if ($isLoggedIn): ?>
        <h3>Welcome back, User!</h3>
        <p>You are logged in. Here are your options:</p>
        <ul>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="settings.php">Account Settings</a></li>
        </ul>
    <?php else: ?>
        <h3>Hello, Guest!</h3>
        <p>You are not logged in. Please log in or sign up to access more features:</p>
        <ul>
            <li><a href="login.php">Log In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    <?php endif; ?>

    <p>Thank you for visiting!</p>

    <h4>Variable Declaration</h4>
    <?php 
        $name = "Indhu";
    ?>
    <p>Hi, I'm <?php echo "$name"; ?></p>

    <!-- PHP Block with Explicit Closing Tag -->
    <h4>With Closing Tag</h4>
    <?php
        echo "Welcome, ALL.<br>"; 
        echo "This is a PHP code.<br>";
    ?>

    <!-- PHP Block without Explicit Closing Tag -->
    <h4>Without Closing Tag</h4>
    <?= "Hello, this is my PHP code.<br>" ?>
    <?php echo 'We omitted the last closing tag';
