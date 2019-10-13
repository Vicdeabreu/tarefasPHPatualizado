<?php

$a = ['a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'];

echo $a['a'];

$jsonA = json_encode($a);

echo $jsonA;

$b = json_decode($a);

echo $b;

?>