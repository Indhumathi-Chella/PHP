<?php
setcookie("user", "Indhu", time() + 3600, "/");

// Set cookie with multiple values using array
setcookie("userPreferences[theme]", "dark", time() + 3600, "/");
setcookie("userPreferences[font_size]", "large", time() + 3600, "/");

// Check if cookies are set
if (isset($_COOKIE["user"])) {
    echo "Hello, " . $_COOKIE["user"] . "<br>";
}

if (isset($_COOKIE["userPreferences"])) {
    echo "Theme: " . $_COOKIE["userPreferences"]["theme"] . "<br>";
    echo "Font Size: " . $_COOKIE["userPreferences"]["font_size"] . "<br>";
}
?>
