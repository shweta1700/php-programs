<?php
//php program for Defining constructor
class Flower {
  public $name;
  public $color;

  function __construct($name,$color) {
    $this->name = $name;
    $this->color=$color;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$obj = new Flower("Lily","White");
echo "Name is : " . $obj->get_name();
echo "<br>";
echo "Color is : " . $obj->get_color();
?>