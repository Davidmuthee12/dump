<?php
$i = 1; // initialize counter
while ($i < 6) { // checks condition
    echo $i; // execute the code 
    $i++; // increment counter
} 

// break statement
while ($i < 6) {
    if ($i == 3) break;
    echo $i; // prints 12
    $i++;
}

// continue statement
while ($i < 6) {
    if ($i == 3) continue; // skips 3
    echo $i; //prints 12456
    $i++;
}

//  do while loop, loops through a block of code atleast once and 
//  repeats the loop as long as the specified condition is true
do {
    echo $i;
    $i++;
}while ($i < 6);


// for loop: loops through a block of code a specified number of times
for ($x = 0; $x <= 10; $x++) {
    echo "The Number is: $x <br>";
}

// foreach loop: loops through a block of code
//  for each element in an array or each property in an object
$colors = array("red", "greeen", "white","yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

// foreach loop On Associative Arrays
$members = array("Peter"=>"35", "Ben"=>"37", "joe"=>"43");
foreach ($members as $key => $value) {
    echo "$key: $value <br>";
}
?>