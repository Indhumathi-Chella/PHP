<?php
// if statement
$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.\n";
}

// if-else statement
$age = 16;
if ($age >= 18) {
    echo "You are eligible to vote.\n";
} else {
    echo "You are not eligible to vote.\n";
}

//  else-if statement
$score = 75;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} else {
    echo "Grade: F\n";
}

// alternate syntax
?>
<?php 
$name="indhu";
if ($name == "indhu"): 
    echo "Welcome ".$name ."\n";
?>
<?php endif; ?>

<?php
$loggedIn = true;
if ($loggedIn):
    echo "Welcome back!" ."\n";
else:
    echo "Please log in."."\n";
endif;
?>

<?php
// while
$count = 1;
while ($count <= 5) {
    echo "Count: $count\n";
    $count++;
}

// do-while
$num = 10;

do {
    echo "Current number is: $num\n";
    $num -= 2; // Decrease $num by 2
} while ($num > 0);


?>

<?php
// for loop - printing numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

// Alternate syntax 
echo "\nAlternate Syntax\n";
for ($i = 1; $i <= 3; ++$i):
    echo "This is iteration number $i\n";
endfor;

// Using break  - stop when number exceeds 5
echo "Break Example :\n";
for ($i = 1; ; $i++) {
    if ($i > 5) {
        break;
    }
    echo $i . "\n";
}

// Using continue - skip when number is even
echo "\n Continue Example:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "\n";
}

// Multiple variables initialized 
echo "\n Multi var Example :\n";
for ($i = 1, $j = 10; $i <= 5; $i++, $j--) {
    echo "i = $i, j = $j\n";
}

// Using an array and modifying its values in the loop
echo "\nArr modify Example :\n";
$food = [
    ['fruit' => 'Apple', 'fruits' => 1230],
    ['fruit' => 'orange', 'fruits' => 654],
    ['fruit' => 'pineapple', 'fruits' => 1072]
];
for ($i = 0, $size = count($food); $i < $size; $i++) {
    // Changing salt value
    $food[$i]['fruits'] = mt_rand(100, 999);
    echo $food[$i]['fruit'] . "'s discount amount : " . $food[$i]['fruits'] . "\n";
}


// switch

echo "\nSwitch:\n" ;
// $dept="ECE";
// $dept= 1;
// $dept= 0.1;
$dept = "true";

switch ($dept) {
    case "ECE": 
        echo "Welcome to the Electronics and Communication Engineering Department!";
        break;

    case "CSE":
        echo "Welcome to the Computer Science and Engineering Department!";
        break;

    case "EEE":
        echo "Welcome to the Electrical and Electronics Engineering Department!";
        break;

    case 1:
        echo "Our institution provides excellent placement opportunities for students.";
        break;

    case 0.1:
        echo "Hostel facilities are available for students.";
        break;

    case true:
        echo "You have selected the best college for your education!";
        break;

    default:
        echo "Welcome! Please select a valid department or option.";
}
?>
<?php
$i = 0;
echo "switch:\n";
switch ($i) {
    case 0;
    case 1;
    case 2;
        echo "i is less than 3 but not negative";
        break;
    case 3;
        echo "i is 3";
}

$a = 0;

switch(++$a) {
    case 3: echo 3; break;
    case 2: echo 2; break;
    case 1: echo 1; break;
    default: echo "No match!"; break;
}

?>


 <?php
//  match 
// language
$languageCode = 'es';

$language = match ($languageCode) {
    'en' => 'English',
    'es' => 'Spanish',
    'fr' => 'French',
    'de' => 'German',
    'zh' => 'Chinese',
    default => 'Unknown Language',
};

echo "Selected Language: $language"; 
// Output: Selected Language: Spanish


//  palindrome or not
$word = 'radar';

$result = match ($word === strrev($word)) {
    true => "$word is a palindrome\n.",
    false => "$word is not a palindrome\n.",
};

echo $result;  // Output: radar is a palindrome.

// match with camparison operator

// number neg or pos
$number = -5;
$category = match (true) {
    $number > 0 => 'Positive',
    $number < 0 => 'Negative',
    $number === 0 => 'Zero',
};
echo "The number is: $category\n"; // Output: The number is: Negative

// BMI Calculator
$weight = 42; // in kg
$height = 1.63; // in meters
$bmi = $weight / ($height ** 2);
$bmiCategory = match (true) {
    $bmi < 18.5 => 'Underweight',
    $bmi < 25 => 'Normal weight',
    $bmi < 30 => 'Overweight',
    $bmi >= 30 => 'Obese',
};
echo "Your BMI Category: $bmiCategory\n"; // Output: Your BMI Category: Underweight


?>

<?php
// 
declare(ticks=1);
// declare(strict_types=1);
// declare(encoding='UTF-8'); // Ignored in PHP 5.4+

// Tick handler
function tickHandler() {
    echo "Tick triggered!\n";
}

register_tick_function('tickHandler');

// Strict typing function
function multiply(int $a, int $b): int {
    return $a * $b;
}

// Test tick and strict typing
echo multiply(3, 4) . "\n"; // Works
// echo multiply(3.5, 2);      // Throws TypeError

unregister_tick_function('tickHandler');
?>
<?php
include("module.php");
echo "welcome";
?>
https://www.php.net/manual/en/language.oop5.php
<?php
$count = 1;
echo "goto Example:\n";
start:
if ($count <= 5) {
    echo "$count\n";
    $count++;
    goto start;
}
?>