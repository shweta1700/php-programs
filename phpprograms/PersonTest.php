<?php
abstract class PersonTest {
	public $name;
	public function __construct($name) {
		$this -> name = $name;
	}
	abstract public function greet() : string;
}
class Programmer extends PersonTest {
	public function greet() : string {
		return "Hello World from " . $this -> name;
	}
}
class Student extends PersonTest {
	public function greet() : string {
		return "Hii! I'm " . $this -> name;
	}
}
class Teacher extends PersonTest {
	public function greet() :string {
		return "Good morning students";
	}
}
$programmer = new Programmer('John');
echo $programmer -> greet();
echo "<br>";

$student = new Student('Patrick');
echo $student -> greet();
echo "<br>";

$teacher = new Teacher('Kiya');
echo $teacher -> greet();
echo "<br>";