<?php  
    $car = array("Mercedes", "Creta", "Audi", "Chevrolet", "Skoda");  
    echo "Arraylist: ";  
    print_r($car);  
    $remove = array_pop($car);  
    echo "<\n Removed element from array is: ";  
    print_r($remove);  
    echo "\n Updated arraylist: ";  
    print_r($car);  
?>     