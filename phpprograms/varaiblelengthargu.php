<?php  
function add(...$numbers) {  
    $sum = 0;  
    foreach ($numbers as $n) {  
        $sum += $n;  
    }  
    return $sum;  
}  
  
echo add(1, 2, 3, 4);  
?>  