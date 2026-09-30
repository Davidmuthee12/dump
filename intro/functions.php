<?php
function myFunc() {
    echo "Hello function myFunc" . "<br>";
}

echo myFunc();

function MyName($fname) {
    echo $fname . "<br>";
}

MyName("Jonte");

// default parameter
function defParam($height = 50) {
    echo "The height is: $height" . "<br>";
}

defParam(350); // will take the height value of 350
defParam(); // will take the height value of 50

// Returning values
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}   

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>