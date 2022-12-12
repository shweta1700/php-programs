<?php  
    //php program to demonstrate the use of continue statement  
  
    echo "Even numbers between 1 to 20: \n";  
    $i = 1;  
    while ($i<=20) {  
        if ($i %2 == 1) {  
            $i++;  
            continue;   //here it will skip rest of statements  
        }  
        echo $i;  
        echo "\n";  
        $i++;  
    }     
?>  