<?php

// custom attribute class
#[Attribute]
class MyAttribute {
    public function __construct(public string $info) {}
}

// Apply attribute to class, property & method
#[MyAttribute('Class information')]
class MyClass {

    #[MyAttribute('Property information')]
    public string $myProperty = 'Hello, world!';

    #[MyAttribute('Method information')]
    public function myMethod() {
        return 'This is myMethod.';
    }
}

// Use Reflection to read the attributes

$reflectionClass = new ReflectionClass(MyClass::class);

// Reading class attributes
$classAttributes = $reflectionClass->getAttributes(MyAttribute::class);
foreach ($classAttributes as $attribute) {
    $instance = $attribute->newInstance();
    echo "Class Attribute: " . $instance->info . PHP_EOL;
}

// Reading property attributes
$reflectionProperty = $reflectionClass->getProperty('myProperty');
$propertyAttributes = $reflectionProperty->getAttributes(MyAttribute::class);
foreach ($propertyAttributes as $attribute) {
    $instance = $attribute->newInstance();
    echo "Property Attribute: " . $instance->info . PHP_EOL;
}

// Reading method attributes
$reflectionMethod = $reflectionClass->getMethod('myMethod');
$methodAttributes = $reflectionMethod->getAttributes(MyAttribute::class);
foreach ($methodAttributes as $attribute) {
    $instance = $attribute->newInstance();
    echo "Method Attribute: " . $instance->info . PHP_EOL;
}
?>
