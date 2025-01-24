<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Types</title>
</head>
<body>
<?php
// 1. Null Example
$nullVar = null; // Variable with no value
echo "1.Null Variable: " . var_export($nullVar, true) . "<br>";

// 2. Boolean Example
$isActive = true;
$isAvailable = false;
echo "2.Is Active: $isActive, Is Available: $isAvailable<br>";

// 3. Integer Example
$age = 25;
$year = 2025;
echo "3.Age: $age, Year: $year<br>";

// 4. Floating-point Example
$price = 99.99;
$taxRate = 0.15;
echo "4.Price: $price, Tax: " . ($price * $taxRate) . "<br>";

// 5. String Example
$greeting = "Hello, World!";
$name = "Indhu";
echo "5.$greeting $name<br>";

// 6. Numeric String Example
$numericString = "100";
$sum = $numericString + 50; // Numeric string is converted to a number
echo "6.Sum of Numeric String: $sum<br>";

// 7. Array Example
$fruits = ["apple", "banana", "cherry"];
$fruits[] = "orange"; // Adding a new item
echo "7.Fruits: " . implode(", ", $fruits) . "<br>";

// 8. Object Example
class Person{
    public $pname;
    public $page;

    public function __construct($pname, $page) {
        $this->pname = $pname;
        $this->page = $page;
    }

    public function info() {
        return "8.Hello, I'm $this->pname  and $this->page years old.";
    }
}

$person = new Person("Indhu", "22");
echo $person->info() . "<br>";

// 9. Enumeration Example
enum DaysOfWeek {
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}

$today = DaysOfWeek::Monday;
echo "9.Today is " . $today->name . "<br>";

// 10. Iterable Example 
function printNumbers(iterable $numbers) {
    echo "10.Iterables: <br>";
    foreach ($numbers as $number) {
        echo "$number <br>";
    }

}

printNumbers([1, 2, 3, 4, 5]);


// 11. Callback Example

function add($a,$b,$callback){
    $result = $a+$b;
    $callback($result);
}
function display($result){
    echo"11.Addition:$result<br>" ;
}
add(5,10,'display');

// 12. Mixed Example
echo "12.Mixed Type:";
function displayValue(mixed $value) {
    echo "Value: $value<br>";
}

displayValue("Hello");
displayValue(123);
displayValue([1, 2, 3]);

// 13. Void Example
function printMessage(): void {
    echo "13.void type: ";
    echo "This function doesn't return anything.<br>";
}

printMessage();

// 14. Never Example
echo "14.Never type";
function throwError(): never {
    throw new Exception("Something went wrong!");
}

try {
    throwError();
} catch (Exception $e) {
    echo "Caught Error: " . $e->getMessage() . "<br>";
}

// 15.Class Types Example
echo "15.classtype";
class Animal {
    public function speak(): string {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function speak(): string {
        return "Bark";
    }
}

$dog = new Dog();
echo "Dog says: " . $dog->speak() . "<br>";

// 16. Value Types Example
echo "16.value typetype";
$number1 = 10;
$number2 = $number1; 
$number2 = 20; 
echo "Number 1: $number1, Number 2: $number2<br>";



// 17. Type Declaration Example
echo "17.type Declaration: ";
function multiply(int $a, float $b): float {
    return $a * $b;
}

echo "Multiplication result: " . multiply(10, 2.5) . "<br>";

// 18. Type Juggling Example
$var = "100"; // String
$var += 25; // Automatically converted to integer
echo "18.Type juggling<br>";
echo "After type juggling: $var<br>";
$var1 = 10;
$value = (bool)$var1;
echo "After type juggling: $value<br>";
?>

</body>
</html>