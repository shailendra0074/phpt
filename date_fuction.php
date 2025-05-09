echo date("Y-m-d");        // 2025-05-09
echo date("l, F j, Y");    // Friday, May 9, 2025
echo "<br>"

echo time(); // 1715268000 (example output)

echo "<br>"
$timestamp = mktime(0, 0, 0, 12, 25, 2025);
echo date("Y-m-d", $timestamp); // 2025-12-25
echo "<br>"
echo date("Y-m-d", strtotime("next Monday")); // e.g., 2025-05-12
echo "<br>"
print_r(getdate());
echo "<br>"
var_dump(checkdate(2, 29, 2025)); // false (2025 is not a leap year)
echo "<br>"

date_default_timezone_set("Asia/Kolkata");
echo date("H:i:s"); // Local time in India
echo "<br>"
