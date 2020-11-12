<?php

	// here we have written namespace in same file, and made const, class and methods inside it. 
	
	declare(encoding='UTF-8');			/**/
	namespace Product;					/*format namespace keyword then its name.*/
		const PI = 3.14;				/*defined a constant inside that namespace.*/

		class My_class{					/*defined a class*/
			public $x;

			public function __construct($a){
				$this->x = $a;
			}

			public function get_number_square(){
				return $this->x * $this->x;
			}
		}

		function get_wish($name){			/*defined a method*/
			return "Hello ".$name;
		} 

		echo PI."<br>";
		$my_obj = new My_class(2);			/*made an object of My_class class*/
		echo $my_obj->get_number_square()."<br>";			/*using that object , we are calling that method*/
		echo get_wish("Aaqib")."<br>";				/*simply calling that method*/

		// we can also make other file and then can use these namespace stuffs at that files. so firstly we have to include the file at the top of new file, and then we can use it !! for accessing const , class and methods , we dont have to write simpy the name , then will show error , we have to give proper path of it .. eg. this file name is namespace.php  and we want to use it in file called namespace_include.php . then in namespace_include.php file, first we have to include by include "namespace.php" , and then for accessing anything , we will use its path. suppose we want to use that const PI in our namespace_include.php file , then we will write echo Product\PI; same for classes.check it on namespace_include file.

?>