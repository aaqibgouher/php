<?php
	// Passing Arguments by Reference !
	function add(&$num){
		$num += 5;
	}

	$num = 10;
	add($num);
	echo $num;
	
?>