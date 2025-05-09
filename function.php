<?php
function functionName($parameter1, $parameter2 = "default") {
    // code to execute
    return $result;
}

function greet() {
    echo "Hello, world!";
}

greet(); // Output: Hello, world!

function sayHello($name) {
    echo "Hello, $name!";
}

sayHello("Alice"); // Output: Hello, Alice!

function greetUser($name = "Guest") {
    echo "Hello, $name!";
}

greetUser(); // Output: Hello, Guest!


function add($a, $b) {
    return $a + $b;
}

$sum = add(5, 3);
echo $sum; // Output: 8

function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(4, 5); // Output: 20

$square = function($n) {
    return $n * $n;
};

echo $square(6); // Output: 36

$square = fn($n) => $n * $n;
echo $square(7); // Output: 49


?>