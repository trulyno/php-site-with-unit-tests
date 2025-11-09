# PHP Site with Unit Tests

A simple PHP application demonstrating a Calculator class with comprehensive unit tests using PHPUnit.

## Features

- Calculator class with basic arithmetic operations (add, subtract, multiply, divide)
- Input validation (division by zero protection)
- Comprehensive unit test suite with 9 tests covering various scenarios
- PSR-4 autoloading
- PHPUnit test framework

## Requirements

- PHP >= 7.4
- Composer

## Installation

1. Clone the repository
2. Install dependencies:
```bash
composer install
```

## Running the Application

Run the main application:
```bash
php index.php
```

This will demonstrate the Calculator class functionality with sample operations.

## Running Tests

Run all tests:
```bash
./vendor/bin/phpunit
```

Run tests with verbose output:
```bash
./vendor/bin/phpunit --verbose
```

## Project Structure

```
.
├── src/
│   └── Calculator.php          # Main Calculator class
├── tests/
│   └── CalculatorTest.php      # Unit tests for Calculator
├── vendor/                      # Composer dependencies (gitignored)
├── composer.json                # Project dependencies
├── phpunit.xml                  # PHPUnit configuration
├── index.php                    # Application entry point
└── README.md                    # This file
```

## Test Coverage

The test suite includes:
- Addition tests (positive and negative numbers)
- Subtraction tests (positive and negative results)
- Multiplication tests (including multiplication by zero)
- Division tests (with floating-point results)
- Exception handling tests (division by zero)

All tests pass successfully with 100% success rate.