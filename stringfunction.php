<?php
// strlen - Get string length
$str = "welcome to GeeksforGeeks";
$len = strlen($str);
echo "String Length: " . $len . "\n\n";

// strtolower - Convert string to lowercase
$str = "PHP is Amazing!";
$lower = strtolower($str);
echo "Lowercase: " . $lower . "\n\n";

// strtoupper - Convert string to uppercase
$upper = strtoupper($str);
echo "Uppercase: " . $upper . "\n\n";

// trim - Remove whitespace from the beginning and end
$str = "   Clean me up!   ";
$trimmed = trim($str);
echo "Trimmed String: '" . $trimmed . "\n\n";

// substr - Extract substring
$str = "Substring Example";
$substring = substr($str, 10, 7);
echo "Substring: " . $substring . "\n\n";

// strpos - Find position of substring
$str = "Look for the position of a word.";
$position = strpos($str, "position");
echo "Position of 'position': " . $position . "\n\n";

// str_replace - Replace substring
$str = "Replace me, please!";
$replaced = str_replace("me", "it", $str);
echo "Replaced String: " . $replaced . "\n\n";

// explode - Split string into array
$str = "red,green,blue,yellow";
$array = explode(",", $str);
echo "Exploded Array: ";
print_r($array);

// implode - Join array into string
$array = ["one", "two", "three"];
$joined = implode(" - ", $array);
echo "Joined String: " . $joined . "\n\n";

// str_repeat - Repeat string
$str = "Repeat ";
$repeated = str_repeat($str, 3);
echo "Repeated String: " . $repeated . "\n\n";

// md5 - Hash string with MD5
$str = "securePassword";
$md5Hash = md5($str);
echo "MD5 Hash: " . $md5Hash . "\n\n";

// sha1 - Hash string with SHA1
$sha1Hash = sha1($str);
echo "SHA1 Hash: " . $sha1Hash . "\n\n";

// htmlspecialchars - Convert special characters to HTML entities
$str = "<script>alert('Hacked!');</script>";
$escaped = htmlspecialchars($str);
echo "Escaped HTML: " . $escaped . "\n\n";

// str_contains - Check if a string contains a substring
$str = "Does this contain PHP?";
$contains = str_contains($str, "PHP");
echo "Contains 'PHP': " . ($contains ? "Yes" : "No") . "\n\n";

// str_starts_with - Check if a string starts with a substring
$str = "Starts and ends.";
$starts = str_starts_with($str, "Starts");
echo "Starts with 'Starts': " . ($starts ? "Yes" : "No") . "\n\n";

// str_ends_with - Check if a string ends with a substring
$ends = str_ends_with($str, "ends.");
echo "Ends with 'ends.': " . ($ends ? "Yes" : "No") . "\n\n";

// lcfirst - Make the first character lowercase
$str = "Hello World";
$lcfirst = lcfirst($str);
echo "Lowercase First Character: " . $lcfirst . "\n\n";

// ucfirst - Make the first character uppercase
$ucfirst = ucfirst($str);
echo "Uppercase First Character: " . $ucfirst . "\n\n";

// ucwords - Make the first character of each word uppercase
$ucwords = ucwords($str);
echo "Uppercase Words: " . $ucwords . "\n\n";


?>
