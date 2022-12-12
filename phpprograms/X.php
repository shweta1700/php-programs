<?php
#Single level inheritance concept
class X
{
     public function printItem($string)
     {
         echo "Hi ".$string;
     }
     public function printPhp()
     {
         echo"I am from Kolhapur".PHP_EOL;
     }
}
class Y extends X
{
     public function printItem($string)
     {
          echo"Hi ",$string.PHP_EOL;
     }
     public function printPhp()
     {
          echo"I am from Kolhapur";
     }
}
$obj1=new X();
$obj1->printitem("Vaibhavi");
$obj1->printPhp();
$obj2=new Y();
$obj2->printitem("Swara");
$obj2->printPhp();
?>