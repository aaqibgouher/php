<?php
	
	// In this file, we are implementing namespace.php . here simply we are learning the thing called how we can include that namespace file that we have created into other file and how to use it on that file..before going further , i will recommmend that check it out my namespace.php file ..

	include "namespace.php";		/*simply we are included file called namespace.php*/	

	use Product as p;			/*Used an alias. basically it shortened the name .*/

	echo p\PI."<br>";			/*simply printing PI const that we defined on that file.So whats the syntax : first we have to give the namespace_name\const,class_name,method_name. */

	$my_obj_new = new p\My_class(4);				/*On that file, we have also created the object of My_class . and here too we are doing so. Here creadted an object named my_obj_new and there we are giving the path and passing the value to its constructor.*/
	echo $my_obj_new->get_number_square()."<br>";				/*Now using that object, now we can access anything inside that class.so we are calling get_number_sqare function.*/

	echo p\get_wish("Gouher")."<br>";	 			/*We have defined one of the function as well, so we are just calling it using its path.*/

?>