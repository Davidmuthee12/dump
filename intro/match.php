<?php
$favColor = "yellow";

$text = match ($favColor) {
    "red" => "Your favorite color nah be red nah",
    "green" => "Your favorite color nah be green nah",
    "blue" => "your favorite color nah be blue nah",
    default => " ah ah none of the above is your favorite color nah",
};

echo $text . "<br>";


// match multiple values
$d = 3;

$word = match ($d) {
    1,2,3,4,5 => "The week feels so long",
    6,0 => "Weekends nah be da best oo",
    default => "Invalid Day nah",
};

echo $word . "<br>";

?>