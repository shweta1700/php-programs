<?php
$empInfo = array(
'name'=>'John',
'address'=>'Houston',
'employment' => array(
    'id' => '1',
    'address' => 'Los Angeles'
    )
);
print_r(json_decode(json_encode($empInfo)));