<?php
function toObject($arr) {
    if (is_array($arr)) {
        // Return object 
        return (object) array_map('toObject', $arr);
    }
     return false;
}
$empInfo = array(
    'name'=>'John',
    'address'=>'Houston',
    'employment' => array 
        (
           'id' => '1',
           'address' => 'Los Angeles'
        )
);
print_r(toObject($empInfo));