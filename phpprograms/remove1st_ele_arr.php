<?php  
    $color = array("Blue", "Red", "Black", "Green", "Gray", "White");  
    echo "Arraylist: ";  
    print_r($color);  
    $remove = array_shift($color);  
    echo "\n Removed element from array is: ";  
    print_r($remove);  
    echo " \n Updated arraylist: ";  
    print_r($color);  
