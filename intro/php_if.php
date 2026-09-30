<?php
$a = 4;
$b = 8;
$c = 78;

if ($a < $b) {
    echo "$a is less than $b" . "<br>";
} elseif ($a > $b) {
    echo "$a is greater than $b" . "<br>";
} else {
    echo "NOthing makes sense here mate" . "<br>";
}


// short hand if
if ($c > 70) $d = "Jambo";
echo $d . "<br>";

// short hand if....else
$e = $a > $c ? "wagwan" : "Good Boy";
echo $e . "<br>";

// nested if statement
if ($a < $b) {
    if ($c > $b) {
        echo "$c is actually greater than $b" . "<br>";
    } else {
        echo "Total bullsh**t" . "<br>";
    }
}

?>