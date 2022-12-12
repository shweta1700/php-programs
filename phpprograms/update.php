
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
    echo "Connection was successful<br>";
}


$sql = "SELECT * FROM `phptrip` WHERE `dest`='america'";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase\n";
$no=1;
if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo $no .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
        $no = $no +1;
    }
}

// Usage of WHERE Clause to Update Data
$sql = "UPDATE `phptrip` SET `name` = 'Fromamerica' WHERE `dest` = 'america'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "\nNumber of affected rows: $aff \n";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}
