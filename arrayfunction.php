<?php
// array() - Create an array
$fruits = array("Apple", "Banana", "Cherry");
print_r($fruits);
echo "\n";

// count() - Count elements in the array
echo "Count: " . count($fruits) . "\n\n";

// in_array() - Check if a value exists in the array
if (in_array("Banana", $fruits)) {
    echo "Banana is in the array!\n\n";
}

// array_push() - Add elements to the end of the array
array_push($fruits, "Grapes", "Orange");
print_r($fruits);
echo "\n";

// array_pop() - Remove the last element of the array
$removedFruit = array_pop($fruits);
echo "Removed: " . $removedFruit . "\n";
print_r($fruits);
echo "\n";

// array_shift() - Remove the first element of the array
$removedFirst = array_shift($fruits);
echo "Removed First: " . $removedFirst . "\n";
print_r($fruits);
echo "\n";

// array_unshift() - Add elements to the beginning of the array
array_unshift($fruits, "Pineapple", "Mango");
print_r($fruits);
echo "\n";

// array_merge() - Merge two arrays
$berries = ["Strawberry", "Blueberry"];
$allFruits = array_merge($fruits, $berries);
print_r($allFruits);
echo "\n";

// array_combine() - Combine two arrays into key-value pairs
$keys = ["Name", "Age"];
$values = ["Alice", 25];
$person = array_combine($keys, $values);
print_r($person);
echo "\n";

// array_keys() - Get all keys of an array
$keys = array_keys($person);
print_r($keys);
echo "\n";

// array_values() - Get all values of an array
$values = array_values($person);
print_r($values);
echo "\n";

// array_flip() - Flip keys and values in an array
$flippedPerson = array_flip($person);
print_r($flippedPerson);
echo "\n";

// array_reverse() - Reverse the order of an array
$reversedFruits = array_reverse($allFruits);
print_r($reversedFruits);
echo "\n";

// array_slice() - Extract a portion of the array
$slicedFruits = array_slice($allFruits, 1, 3);
print_r($slicedFruits);
echo "\n";

// array_unique() - Remove duplicate values
$duplicates = ["A", "B", "A", "C", "B"];
$uniqueValues = array_unique($duplicates);
print_r($uniqueValues);
echo "\n";

// array_filter() - Filter array elements
$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function ($num) {
    return $num % 2 === 0;
});
print_r($evenNumbers);
echo "\n";

// array_map() - Apply a function to all elements in the array
$squaredNumbers = array_map(function ($num) {
    return $num * $num;
}, $numbers);
print_r($squaredNumbers);
echo "\n";

// array_reduce() - Reduce an array to a single value
$sum = array_reduce($numbers, function ($carry, $num) {
    return $carry + $num;
}, 0);
echo "Sum: " . $sum . "\n\n";

// sort() - Sort an array in ascending order
sort($numbers);
print_r($numbers);
echo "\n";

// rsort() - Sort an array in descending order
rsort($numbers);
print_r($numbers);
echo "\n";

// array_rand() - Pick a random element from an array
$randomKey = array_rand($fruits);
echo "Random Fruit: " . $fruits[$randomKey] . "\n\n";

// shuffle() - Shuffle an array
shuffle($fruits);
print_r($fruits);
echo "\n";
?>
