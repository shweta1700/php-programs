<?php    
function display($number) {    
    if($number<=5){    
     echo "$number \n";    
     display($number+1);    
    }  
}    
    
display(1);    
?>    