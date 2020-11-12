<?php
	// $x = 3;
	// Variable and Its Scope .
	
	// we cant access the global variable inside the function !
	// function get_square(){
	// 	return $x * $x;
	// }

	// If we want to use it , first we have to define it using the keyword named global .
	// function get_square(){
	// 	global $x;
	// 	return $x * $x;
	// }

	// we can also use the globals variable , by doing this way. Actually $GLOBALS is a superglobal. Basically what happens is whenever we define any variable as a global, it stores in the $GLOBALS array, and from where we can access it !

	// function get_square(){
	// 	return $GLOBALS['x'] * $GLOBALS['x'];
	// }

	// How To USE Static
	// If we use static then, it will take the value of previous one only. suppose we call a function, and in starting of it , we have taken a variable and initialised to 0, if we will take normal variable, then every time it willl become 0, but if we take the variables as static then it will take the previous values only !

	// function get_square(){
	// 	static $y = 0;
	// 	echo $y;
	// 	$y++;
	// }

	// echo get_square()."<br>";
	// echo get_square()."<br>";
	// echo get_square()."<br>";

?>