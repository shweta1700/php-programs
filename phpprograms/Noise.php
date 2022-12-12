<?php
//inheritance concept
class Watch {
  public $name;
  public $color;
  public $price;
  public function __construct($name, $color, $price) {
    $this->name = $name;
    $this->color = $color;
    $this->price=$price;
  }
  public function intro() {
    echo "The Watch is {$this->name} , the color is {$this->color} and the price is {$this->price}.";
  }
}

class Noise extends Watch {
  public function message() {
    echo "Am I a watch of noise? <br> ";
  }
}
$obj = new Noise("Noise Colorfit Pro 4", "black", 3000);
$obj->message();
$obj->intro();
?>