<?php
$empInfo = array(
    'name'=>'John',
    'address'=>'Houston',
    'employment' => array(
        'id' => '1',
        'address' => 'Los Angeles'
        )
);
$empInfoObj = (object) $empInfo;
print_r($empInfoObj);