<?php
  
// Aarray definition of an employee
$employee_detail_array = array(
    "name" => "John Doe",
    "position" => "Software Engineer",
    "address" => "53, nth street, city",
    "status" => "best"
);
  
// type casting from array to object
$employee = (object) $employee_detail_array;
      
print_r($employee);
?>