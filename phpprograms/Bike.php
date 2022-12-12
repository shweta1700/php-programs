<?php
//Program for Defining Destructor
class Bike
{
   public $name;
   public $color;
   public $mileage;
   public $price;
   function __construct($name,$color,$mileage,$price)
   {
       $this->name=$name;
       $this->color=$color;
       $this->mileage=$mileage;
       $this->price=$price;
   }
   function __destruct()
   {
       echo "Bike is: {$this->name} <br> Color is: {$this->color} <br> Mileage is: {$this->mileage} <br> Price is: {$this->price}";
   }
}

$obj=new Bike("Activa","Brown","51.23kmpl",84345);

?>