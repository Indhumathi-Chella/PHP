<?php
// class

class Introduction {
    public $message = "Hello,Welcome to PHP!\n";

    public function greet() {
        return $this->message;
    }
}

$intro = new Introduction();
echo $intro->greet(); // Output: Hello,Welcome to PHP!!

// basic
class Basics {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$obj = new Basics();
$obj->setName("Indhu");
echo $obj->getName(); // Output: Indhu


// Properties example

class BankAccount {
    
    public $holder;
    private $balance;
    protected $accountId;

    // Constructor to initialize account details
    public function __construct($holder, $accountId, $initialBalance = 0) {
        $this->holder = $holder;
        $this->accountId = $accountId;
        $this->balance = $initialBalance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "\nDeposited $amount and Balance: " . $this->balance;
        }
        return "Deposit must be positive.\n";
    }

    // Public method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew $amount and Balance: " . $this->balance;
        }
        return $amount > $this->balance ? "Insufficient funds." : "Amount must be positive.";
    }

    // check balance
    public function getBalance() {
        return "Current Balance: " . $this->balance;
    }

    // get account details
    public function getDetails() {
        return "Holder: $this->holder, Account ID: $this->accountId";
    }

    // account summary
    public function getSummary() {
        return $this->getDetails() . ", Balance: " . $this->balance;
    }
}

class PremiumAccount extends BankAccount {

    public function getPremiumDetails() {
        return "Premium Account - " . $this->getDetails();
    }
}

// obj
$account = new BankAccount("Indhumathi", "123456789", 1000);

// Perform operations
echo $account->deposit(500) . "\n";  
echo $account->withdraw(300) . "\n"; 
echo $account->withdraw(2000) . "\n"; 
echo $account->getBalance() . "\n";  

// Create a PremiumAccount object
$premiumAccount = new PremiumAccount("Dharshini", "987654321", 5000);
echo $premiumAccount->getPremiumDetails() . "\n"; 


?>

<?php
class Task {
    public function __construct() {
        echo "Task created!\n";
    }

    public function __destruct() {
        echo "Task destroyed!\n";
    }

    public function add($a, $b) {
        return $a + $b;
    }
}

$task = new Task();

$result = $task->add(5, 3); 
echo "The result of addition is: $result\n";
// Output: The result of addition is: 8

// When the script finishes, the object is destroyed
// Output: Task destroyed!

// static Method

class MathOperations {
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

echo MathOperations::multiply(4, 5);  // Outputs: 20


// Inheritance

class Animal {
    public function speak() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->speak();  // Outputs: Bark


// Abstract
abstract class Shape {
    abstract public function area();
}

class Rectangle extends Shape {
    public $width, $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

$rect = new Rectangle(5, 10);
echo $rect->area();  // Outputs: 50

// object Interface

interface MyInterface {
    public function doTask();
}

class MyClass implements MyInterface {
    public function doTask() {
        echo "Task completed!";
    }
}

$obj = new MyClass();
$obj->doTask(); // Output: Task completed!


// trait
trait Logger {
    public function log($message) {
        echo "[LOG]: $message";
    }
}

class MyClasstrait {
    use Logger;
}

$obj = new MyClasstrait();
$obj->log("Logging message!"); // Output: [LOG]: Logging message!


// anonymous class
$addNumbers = new class {
    public function add($a, $b) {
        return $a + $b;
    }
};

echo $addNumbers->add(5, 10);  // Output: 15




?>



