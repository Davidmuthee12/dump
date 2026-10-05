<?php
echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d") . "<br>";

// automatic copyright update
echo "Copyright: 2020-" . date("Y") . "<br>";

// display the time
echo "The time is: " . date("H:i:s") . "<br>";
echo "The time is: " . date("H:i:s a") . "<br>";

// set default time zone
date_default_timezone_set("Africa/Nairobi");
echo "The time in Nairobi is: " . date("Y-m-d H:i:s") . "<br>";

// to get the default timezone used by all date/time functions in the script
echo date_default_timezone_get() . "<br>";

// mktime() funtion returns a unix timestamp for a date
date_default_timezone_set("Africa/Nairobi");

$d = mktime(0, 0, 0, 10, 3, 1975);
echo "October 3, 1975 was on a " . date("l", $d) . "<br>";

// time() returns the current time as a unix timestamp
echo "Now: " . time() . "<br>";

// here we format the timestamp to a readable date and time
// Get the current Unix timestamp
$ts = time();
// Format timestamp
$curDate = date('Y-m-d H:i:s', $ts); 
echo $curDate;

// strtotime() Function - converts an English textual datetime string
//  into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
$d = strtotime("10:30pm November 15 2025");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d);
?>