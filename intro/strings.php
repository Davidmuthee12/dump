<?php
$x = "john";
// double quotes will output values of special character
// thus below statement prints name: john
echo "name: $x <br>";

// single quotes dont subtitute variables thus 
// prints the whole string of character i.e.
// name: $x
echo 'name: $x <br>';


// strlen function returns the length of a string
echo strlen("Hello world") . "<br>";

// str_word_count returns the number of words is a string
echo str_word_count("Hello world from jannah") . "<br>";

// str_contains() funtion. Available on PHP 8.0 and above
// Remember this function performs a case sensitive search PHP is diff from php thus returns bool(false)
$txt = "Im starting to love PHP";
echo var_dump(str_contains($txt, "PHP")) . "<br>";

// for php < 8.0 use strpos() funtion
// this function perfroms a case sensitive search for a specific text within a  string
echo strpos("hello world","world") . "<br>";


// str_starts_with() function. 
// checks wheter a string starts with a specific substring
// this function performs a case sensitive search
$a = "Im starting to write PHP";
var_dump(str_starts_with($a, "Im starting"));
echo "<br>";

// str_ends_with() function
// checks if a string ends with a specific substring
// available only on PHP 8.0 and later
$b = "Im loving the PHP syntax";
var_dump(str_ends_with($b, "syntax"));
echo "<br>";

// strtouppper() funtion
// returns a string in uppercase
$c = "hello world";
echo strtoupper($c) . "<br>";

// strtolower() funtion
// returns a string in lowercase
$d = "HELLO WORLD";
echo strtolower($d) . "<br>"; 

// str_replace() function
// replace some character with other characters in a string
$e = "Hello world";
echo str_replace("world", "Dolly", $e) . "<br>";

// strrev() function reverses a string
$f = "hello world";
echo strrev($f) . "<br>";

// trim() removes whitespaces from the beginnign or end
$g = "  hello world";
echo "<input value='" . $g . "'>";
echo "<br>";
echo "<input value='" . trim($g) . "'>" . "<br>";


// explode() funtion splits a string into an array
$w = "Hello lovely world";
$y = explode(" " , $w);
print_r($y) . "<br>";
echo "<br>";

// string concatination
$z = "hello";
$s = "world";
echo $z . " " .$s . "<br>";
// surround the two variables with double quotes to include whitespace between both automaticaly
echo "$z $s" . "<br>";

// substr() function used to extract a part of string
$y = "hello world!";
echo substr($y, 3, 5) . "<br>";
// slice string to the end
echo substr($y, 6) . "<br>";
// slice strig from the end
echo substr($y, -5, 3) . "<br>";

// escape characters
// to insert illegal characters in a a string use an escape character
$h = "hello this is vladmir sololov from the \"soviet\" of the north";
echo $h . "<br>";
?>