<!DOCTYPE html>
<html>
<body>

<?php
// Abstract base class
abstract class Car {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function intro(); 
}

// Child classes
class Audi extends Car {
  public function intro() {
    return "German quality! I'm an $this->name!"; 
  }
}

class Citroen extends Car {
  public function intro() {
    return "French extravagance! I'm a $this->name!"; 
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro() . "<br>";


//  ============== Abstract Method with Arguments =============

abstract class ParentClass {
  // Abstract method with one argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "$prefix $name";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
echo "<br>";
echo $class->prefixName("Baby Doe");
?>
 
</body>
</html>
