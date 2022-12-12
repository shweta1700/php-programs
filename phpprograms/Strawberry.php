<?php
//Overriding inherited methods
class Fruits {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} <br>  Color is {$this->color}.";
  }
}

class Strawberry extends Fruits {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "Fruit is {$this->name} <br> Color is {$this->color} <br> Weight is {$this->weight} gram";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 40);
$strawberry->intro();
?>