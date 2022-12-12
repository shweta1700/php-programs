<?php
#creating objects
class Mobile
{
   var $name;
   Var $price;
   public function setName($name)
   {
       $this->name=$name;
   }
   public function getName()
   {
       echo $this->name."<br/>";
   }
   public function setPrice($price)
   {
       $this->price=$price;
   }
   public function getPrice()
   {
       echo $this->price."<br/>";
   }
}
$oppo=new Mobile();
$vivo=new Mobile();
$oppo->setName("Oppo F9 pro");
$vivo->setName("Vivo y19");
$oppo->setPrice(15000);
$vivo->setPrice(20000);
$oppo->getname();
$vivo->getname();
$oppo->getPrice();
$vivo->getPrice();
?>