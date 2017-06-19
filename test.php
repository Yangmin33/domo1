<?php
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Bill',
    'last_name' => 'Gates',
    "a"=>array(
    		'b'	=> 1,
    		'c'	=> 2
    	)
  ),
  array(
    'id' => 4767,
    'first_name' => 'Steve',
    'last_name' => 'Jobs',
    "a"=>array(
    		'b'	=> 3,
    		'c'	=> 4
    	)
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mark',
    'last_name' => 'Zuckerberg',
    "a"=>array(
    		'b'	=> 5,
    		'c'	=> 6
    	)
  )
);

$last_names = array_column($a, 'c');
print_r($last_names);

$x =5;
echo $x++;

echo $x++;

$a = '1';
$b = &$a;
$b = "2$b";


?>