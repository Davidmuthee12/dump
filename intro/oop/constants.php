<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";
}

//  A constant can be accessed from outside the class by using
//  the class name followed by the scope resolution operator (::)
//  followed by the constant name:
echo Goodbye::MESSAGE; // Access constant

// A constant can also be accessed from inside the class by using the self keyword
//  followed by the scope resolution operator (::) followed by the constant name:
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";

  public function bye() {
    echo self::MESSAGE; // Access constant
  }
}

$goodbye = new Goodbye();
$goodbye->bye();
?>