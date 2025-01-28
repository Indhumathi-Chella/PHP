<?php
$string1 = "Hello123";
$string2 = "hello";
$string3 = "12345";
$string4 = "Hello World!";
$string5 = "   ";  // Whitespace string
$string6 = "\t\n";  // Control characters
$string7 = "A1b2C3"; // Mix of upper, lower, alphanumeric

// ctype_alnum
echo ctype_alnum($string1) ? "$string1 is alphanumeric.\n" : "$string1 is not alphanumeric.\n";

// ctype_alpha
echo ctype_alpha($string2) ? "$string2 is alphabetic.\n" : "$string2 is not alphabetic.\n";

// ctype_cntrl
echo ctype_cntrl($string6) ? "$string6 contains control characters.\n" : "$string6 does not contain control characters.\n";

// ctype_digit
echo ctype_digit($string3) ? "$string3 contains only digits.\n" : "$string3 does not contain only digits.\n";

// ctype_graph
echo ctype_graph($string4) ? "$string4 contains printable characters (except space).\n" : "$string4 does not contain printable characters.\n";

// ctype_lower
echo ctype_lower($string2) ? "$string2 is all lowercase.\n" : "$string2 is not all lowercase.\n";

// ctype_print
echo ctype_print($string4) ? "$string4 contains only printable characters.\n" : "$string4 contains non-printable characters.\n";

// ctype_punct
echo ctype_punct($string4) ? "$string4 contains punctuation characters.\n" : "$string4 does not contain punctuation characters.\n";

// ctype_space
echo ctype_space($string5) ? "$string5 is all whitespace.\n" : "$string5 is not all whitespace.\n";

// ctype_upper
echo ctype_upper($string7) ? "$string7 is all uppercase.\n" : "$string7 is not all uppercase.\n";

?>
