<?php

	// constants :

	class Name{
		const MY_NAME = "Aaqib Gouher !";		/*defined a class inside the class with const keyword and the var name should be in upper case.*/
	}

	$name = new Name();			/*formed an object for Name class.*/
	echo $name::MY_NAME;			/*we can access it like that, after making object we can call it like that .. "::" opeator is called scope resolution operator. We can also use it without making its object.*/

	// echo Name::MY_NAME;

	echo "<br>";

	// use this constant inside the function.
	class Thanks{
		const SEND_MESSAGE = "Thanku for your visiting !!!";

		public function bye_bye(){
			return self::SEND_MESSAGE;		/*we have use self keyword for it along with that ::*/
		}
	}

	// echo Thanks::SEND_MESSAGE;
	$thank = new Thanks();
	echo $thank->bye_bye();


	

?>