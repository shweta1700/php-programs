<?php
include("connection.php");
// Create a db
$sql = "CREATE DATABASE dbshweta1";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!\n";
}
else{
    echo "The db was not created successfully because of this error ". mysqli_error($conn);
}
  
?>
