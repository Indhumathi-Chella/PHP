<?php
// Get current date and time
echo "Current Date/Time: " . date("Y-m-d H:i:s") . "\n";

// Get current Unix timestamp
echo "Current Unix Timestamp: " . time() . "\n";

// Convert text to Unix timestamp
echo "Next Monday's Timestamp: " . strtotime("next Monday") . "\n";
echo "Next Friday's Timestamp: " . strtotime("next Friday") . "\n";

// Create Unix timestamp for a specific date/time
echo "Custom Timestamp (08-Aug-2008 12:30): " . mktime(12, 30, 0, 8, 8, 2008) . "\n";

// Validate a date
echo "Is 29-Feb-2024 valid? " . (checkdate(2, 29, 2024) ? "Yes" : "No") . "\n";
echo "Is 29-Feb-2025 valid? " . (checkdate(2, 29, 2025) ? "Yes" : "No") . "\n";

// Set timezone
echo "Timezone get : " . date_default_timezone_get() . "\n";

date_default_timezone_set("Asia/Kolkata");
echo "Timezone Set to: " . date_default_timezone_get() . "\n";


// Create a DateTime object
$date = date_create("2024-08-08");
echo "DateTime Object: " . date_format($date, "Y-m-d H:i:s") . "\n";

// Find difference between two dates
$date1 = date_create("2024-11-27");
$date2 = date_create("2025-01-27");
$diff = date_diff($date1, $date2);
echo "Days Between Dates: " . $diff->format("%a days") . "\n";

// Get GMT date/time
echo "GMT Time: " . gmdate("Y-m-d H:i:s") . "\n";

// Get timestamp (unix) with microseconds
echo "Current Time with Microseconds: " . microtime(true) . "\n";
?>
