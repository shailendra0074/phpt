<?php
echo "Local Scope";

function testLocal() {
    $x = 10; // local variable
    echo $x;
}

testLocal(); // 10
// echo $x;  // ❌ Error: Undefined variable
echo "<br>";

echo "Global Scope";

$x = 20; // global variable

function testGlobal() {
    global $x;
    echo $x;
}

testGlobal(); // 20
echo"<br>";

echo"Static scop";

function counter() {
    static $count = 0;
    $count++;
    echo $count . "<br>";
}

counter(); // 1  
counter(); // 2  
counter(); // 3



?>