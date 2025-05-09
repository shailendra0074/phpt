<?php
  $name = "Shailendra";
  echo "$name <br>";
  echo strlen ($name);
  echo strtoupper("hello <br>"); // HELLO
  echo strtolower("HELLO <br>"); // hello
echo strtolower("HELLO <br>"); // hello
echo ucfirst("hello world <br>"); // Hello world
echo lcfirst("Hello World <br>"); // hello World
echo ucwords("hello world from php <br>"); // Hello World From Php
echo trim("  hello  <br>"); // "hello"
echo ltrim("  hello <br>"); // "hello"
echo rtrim("hello <br> "); // "hello"
echo str_replace("world", "PHP", "Hello world <br>"); // Hello PHP
echo str_ireplace("WORLD", "PHP", "Hello world <br>"); // Hello PHP
echo strpos("Hello world", "world <br>"); // 6
echo stripos("Hello World", "world <br>"); // 6
var_dump(str_contains("Hello world", "world <br>")); // true
echo substr("Hello world <br>", 6, 5); // world
print_r(explode(" ", "apple banana cherry <br>"));
// Array ( [0] => apple [1] => banana [2] => cherry )
echo implode("-", ["2025", "05", "09 <br>"]); // 2025-05-09
echo implode("-", ["2025", "05", "09 <br>"]); // 2025-05-09
echo strcmp("hello", "Hello <br>"); // 1 (case-sensitive)

?>