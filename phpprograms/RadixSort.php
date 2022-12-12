<?php
// radix sort
function radixsort(&$Array, $n) {
  $max = $Array[0];
  
  for ($i=1; $i<$n; $i++) {  
    if($max < $Array[$i])
      $max = $Array[$i];
  }

 
  for ($place = 1; $max/$place > 0; $place *= 10) 
    countingsort($Array, $n, $place); 
}

function countingsort(&$Array, $n, $place) {   
  $output = array_fill(0,$n,0);
  
  
  $freq = array_fill(0,10,0);
  
 
  for($i = 0; $i < $n; $i++)
    $freq[($Array[$i]/$place)%10]++;

  
  for ($i = 1; $i < 10; $i++) 
      $freq[$i] += $freq[$i - 1];    

  
  for ($i = $n - 1; $i >= 0; $i--) { 
      $output[$freq[($Array[$i]/$place)%10] - 1] = $Array[$i]; 
      $freq[($Array[$i]/$place)%10]--; 
  }  

  
  for ($i = 0; $i < $n; $i++) 
      $Array[$i] = $output[$i]; 
}
  
// function to print array
function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i]." "; 
  echo "\n";
} 

$MyArray = array(101, 1, 20, 50, 9, 98, 27, 153, 35, 899);
$n = sizeof($MyArray); 
echo "Original Array: \n";
PrintArray($MyArray, $n);

radixsort($MyArray, $n);
echo "\nSorted Array: \n";
PrintArray($MyArray, $n);
?>