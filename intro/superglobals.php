<?php
// $GLOBALS - an array that contains references to all global variables of the script.
// Global variables are variables that can be accessed  from any scope

$x = 75;
$y = 20;
function myFuntion() {
    echo $GLOBALS['x'] . "<br>";
}

myFuntion();

// you can also refer to global variables inside
//  function by defining them as global with the global keyword
function myFunc() {
    global $x;
    echo $x . "<br>";
}

myFunc();

// Variables created inside a function only belongs to that function,
//  but you can create global variables inside a function by using the $GLOBALS syntax.
function result() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

result();
echo $z . "<br>";


// $_SERVER - holds information about the web server including headers,paths, and script location.
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['HTTP_REFERER'] . "<br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";

// $_REQUEST- contains data from submitted forms, URL query strings, and HTTP Cookies.
// i.e. its an array containing data from $_GET, $_POST, and $_COOKIE superglobals.


?>