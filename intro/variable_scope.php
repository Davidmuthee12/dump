<?php
// Global scope variable
$x = 32;
$y = 78;

function mytest(){
    // local scope variable accesible only within this function
    $x = 5;
    echo "publish inside function $x <br>";
}
mytest();


function test2(){
    /*
    once a variable is used its deleted. 
    however if we need the variable again we use 
    static keyword. 
    */

    static $x = 7;
    echo "$x <br>";

    /*each time the function is called
    the variable will have the value of the last 
    time the function was called
    */

    $x++;
}
test2();
test2();
test2();


function globVar(){
    // access a globalvariable inside function using global keyword
    global $x;
    echo "accessed global function $x <br>";
}
globVar();


function supGlob(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
supGlob();
echo "Output from SuperGlobal $y <br>";


echo "publish global scope $x <br>"; 








?>