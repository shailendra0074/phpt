<?php
$person = [
    "name" => "Alice",
    "age" => 30,
    "city" => "London"
];

echo $person["name"]; // Alice
echo "<br>";
echo $person["city"]; // London

$person["email"] = "alice@example.com"; // Add new key
$person["age"] = 31;                    // Update value


foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

?>

