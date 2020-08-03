<?php

// $GLOBALS :

	$x = 10;	/*defined a global variable.*/
	$y = 20;

	function get_add(){			/*defined the function.*/
		return $GLOBALS['x'] + $GLOBALS['y'];			/*whatever the global we define , it stores in the global array, so to access it , we do like that .*/
	}

	echo get_add()."<br>";		/*called a function with no parameters.*/

	// $_SERVER :	It is a PHP super global variable which holds information about headers, paths, and script locations. By default it also holds lots of the information related to the server. It stores in the array . These are some of the eg.

	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];	
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];

	



