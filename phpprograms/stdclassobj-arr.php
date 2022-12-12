<?php
      
// Object-styled definition of an employee
$employee_object = new stdClass;
$employee_object->name = "John Doe";
$employee_object->position = "Software Engineer";
$employee_object->address = "53, nth street, city";
$employee_object->status = "Best";
  
// The object is converted into array 
// using type casting
$employee_array = (array) $employee_object;
  
// Display the result in array
print_r($employee_array);
?>