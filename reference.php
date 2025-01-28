<?php

// Assigning by reference - links b/w 2 variable any any change in one affects others

$a = 10;
$b = &$a;  // $b is a reference to $a
$b = 20;

echo "a = " .$a ."\n";  // Outputs a = 20
echo "b = " .$a ."\n";   // Outputs b = 20

// Passing by reference - allow func to modify original values
function addFive(&$num) {
    $num += 5;
}
$a = 10;
addFive($a);
echo $a ."\n";  // Outputs 15

// Returning by reference - return reference to variable instead of value

function &getReference() {
    static $var = 10;
    return $var;
}
$ref = &getReference();
$ref = 20;
echo getReference() ."\n";  // Outputs 20

// unsetting refference
$c = 5;
$d = &$c;
$d = 20;
echo "c = " .$c ."\n"; 
unset($c);
echo "After unset\n";
echo "c = " .$c ."\n"; 
echo "d = " .$d ."\n";  


?>