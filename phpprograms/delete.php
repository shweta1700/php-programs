<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshweta1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful\n";
}


$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 13";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "\n Number of affected rows: $aff \n ";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error $err";
}

?>
