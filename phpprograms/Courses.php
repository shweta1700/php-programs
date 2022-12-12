<?php
//program using interface concept
interface Courses
{
    public function Duration();
}
class Mca implements Courses
{
    public function Duration()
    {
        echo "Mca : 2 Years <br>";
    }
}
class Mba implements Courses
{
    public function Duration()
    {
        echo "Mba : 2 Years <br>";
    }
}
class Bsc implements Courses
{
    public function Duration()
    {
        echo "Bsc : 3 Years <br>";
    }
}
$mca = new Mca();
$mba = new Mba();
$bsc = new Bsc();
$courses = array($mca, $mba, $bsc);

foreach($courses as $course) {
  $course->Duration();
}
?>