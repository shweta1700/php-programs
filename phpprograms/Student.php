<?php
#class concept
class Student
{
    public function name()
    {
        echo"Name is Shweta More";
    }
    public function class()
    {
        echo"\n Class is MCA";
    }
}
$obj=new Student("shweta123");
$obj->name();
$obj->class();
?>