<?php
// object overloading

class MyClassover {
    private $data = []; 

    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Getting $name : ";
        return $this->data[$name] ?? null;
    }
}

$obj = new MyClassover;
$obj->name = 'Ziva';  // Calls __set()
echo $obj->name;      // Calls __get()
echo"\n";

// using __call
class Overloading {
    public function __call($name, $arguments) {
        echo "Method '$name' called with arguments: " . implode(", ", $arguments) ."\n";
    }
}

$obj = new Overloading();
$obj->hello(1, 2, 3);  // Output: Method 'hello' called with arguments: 1, 2, 3


?>
<?php
class MyClass {
    public $name = 'Indhu';
    public $age = 22;
    public $country = 'Chennai';
}

$obj = new MyClass();

foreach ($obj as $key => $value) {
    echo "key:$key\n";
    echo "value:$value\n";
    echo "$key => $value\n";

}
?>



<?php
// Final Method 
class Calculator {
    final public function add($a, $b) {
        return $a + $b;
    }
}
class AdvancedCalculator extends Calculator {
    //   Fatal error
    // public function add($a, $b) {
    //     return $a + $b + 10;
    // }
}
$calc = new Calculator();
echo"add:" .$calc->add(2, 3)."\n"; // O/P: 5
?>

<?php
// object cloning
class Product {

    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function __clone() {
        // $this->price = 0;
    }
}

// Original product
$product1 = new Product("Laptop", 1500);

// Clone the product
$product2 = clone $product1;
$product2->name = "Smartphone";

// Output
echo "Product 1: {$product1->name}, Price: {$product1->price}\n"; // Outputs: Laptop, Price: 1500
echo "Product 2: {$product2->name}, Price: {$product2->price}\n"; // Outputs: Smartphone, Price: 1500

?>