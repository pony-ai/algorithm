<?php
$a = [];

for($i=0;$i<7;$i++){
	if($i>3) continue;
	array_push($a, $i);
}
print_r($a);