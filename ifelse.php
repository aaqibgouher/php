<?php

$n = 10;

if($n > 5){
	echo "greater than 5";
}else{
	echo "smaller than 5";
}

echo "<br>";

switch ($n) {
	case 10:
		echo "it is 10";
		break;
	
	default:
		echo "it is diffrent";
		break;
}

?>