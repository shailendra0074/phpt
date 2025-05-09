<?php
$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob",   "age" => 22, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "A"]
];

echo $students[0]["name"];  // Alice
echo"<br>";
echo $students[1]["grade"]; // B

echo"<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br><br>";
}

echo"<br>";
$products = [
    "product1" => ["name" => "Laptop", "price" => 1000, "stock" => 10],
    "product2" => ["name" => "Mouse",  "price" => 25,   "stock" => 200],
    "product3" => ["name" => "Keyboard", "price" => 45, "stock" => 150]
];

echo $products["product2"]["name"]; // Mouse

echo"<br>";
foreach ($products as $id => $product) {
    echo "Product ID: $id<br>";
    foreach ($product as $key => $value) {
        echo ucfirst($key) . ": $value<br>";
    }
    echo "<hr>";
}

?>