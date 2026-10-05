<?php
// Define the named callback function
function myfunction($n) {
  return($n * $n);
}

// Array of numbers to multiply
$numbers = [1, 2, 3, 4, 5];

// Use array_map with the myfunction function as a callback
print_r(array_map("myfunction", $numbers));
echo "<br>";
// anonymous function as callback
$numbers = [1, 2, 3, 4, 5];
$res = array_map(function($n) {return($n * $n);}, $numbers);
print_r($res);
echo "<br>";

// PHP Callbacks in user Defined functions
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  echo $format($str) . "<br>";
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
echo "<br>"
?>