<?php
//polymorphism
interface Shape
{
   public function calArea();
}
class Rectangle implements Shape
{
   private $width;
   private $height;
   public function __construct($width,$height)
   {
       $this->width=$width;
       $this->height=$height;
   }
   public function calArea()
   {
       $area=$this->width*$this->height;
       echo "Area of rectangle is: ".$area ;
       echo "<br>";
   }
}
class Square implements Shape
{
   private $side;
   public function __construct($side)
   {
       $this->side=$side;
       
   }
   public function calArea()
   {
       $area=$this->side*$this->side;
       echo "Area of square is: ".$area;
   }
} 
$rect=new Rectangle(12,5);
$rect->calArea();
$sqr=new Square(10);
$sqr->calArea();
?>