<?php

function numberGenerator($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

// Sum using generator
function sumGenerator($start, $end) {
    $sum = 0;
    foreach (numberGenerator($start, $end) as $number) {
        $sum += $number;
    }
    return $sum;
}

// Example usage
$start = 1;
$end = 5;

echo "Sum of numbers from $start to $end: " . sumGenerator($start, $end) . "\n";
?>


<?php
// Generator function to iterate over numbers
function numGenerator($numbers) {
    foreach ($numbers as $number) {
        yield $number; // Yield each number one by one
    }
}

$numbers = [1, 2, 3, 4, 5];

echo "Using Generator:\n";
foreach (numGenerator($numbers) as $number) {
    echo "$number\n";
}
?>


<?php
// Custom Iterator class to iterate over numbers
class NumberIterator implements Iterator {
    private $numbers;
    private $position = 0;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->numbers[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->numbers[$this->position]);
    }
}

$numbers = [1, 2, 3, 4, 5];
$iterator = new NumberIterator($numbers);

echo "Using Iterator Object:\n";
foreach ($iterator as $number) {
    echo "$number\n";
}
?>

