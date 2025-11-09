<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();

echo "=== PHP Calculator Application ===\n\n";

// Demonstrate addition
$a = 10;
$b = 5;
echo "Addition: {$a} + {$b} = " . $calculator->add($a, $b) . "\n";

// Demonstrate subtraction
echo "Subtraction: {$a} - {$b} = " . $calculator->subtract($a, $b) . "\n";

// Demonstrate multiplication
echo "Multiplication: {$a} * {$b} = " . $calculator->multiply($a, $b) . "\n";

// Demonstrate division
echo "Division: {$a} / {$b} = " . $calculator->divide($a, $b) . "\n";

// Demonstrate division by zero handling
echo "\nTrying to divide by zero...\n";
try {
    $calculator->divide(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== Application complete ===\n";
