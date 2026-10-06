<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is $this->name and the color is $this->color."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class


// PHP - Overriding Inherited Methods
// Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
class Apple extends Fruit {
  // Override the inherited protected method with a public method.
  public function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

$apple = new Apple("Apple", "green");
$apple->intro(); // Calls the overridden method.

// PHP - The final Keyword
// The final keyword can be used to prevent class inheritance or to prevent method overriding.

final class Banana extends Fruit {
  public function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

// This will cause an error because Banana is final and cannot be inherited.
// class ExtraBanana extends Banana {
//   public function message() {
//     echo "This class cannot be created.";
//   }
// }

class Orange extends Fruit {
  final public function intro() {
    echo "The fruit is $this->name and the color is $this->color.";
  }
}

// This will cause an error because intro() is final and cannot be overridden.
// class Citrus extends Orange {
//   public function intro() {
//     echo "This method cannot be overridden.";
//   }
// }

$banana = new Banana("Banana", "yellow");
$banana->intro();

$orange = new Orange("Orange", "orange");
$orange->intro();
?>
</body>
</html>