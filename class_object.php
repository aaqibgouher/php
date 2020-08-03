<?php
	// Class and Object 

	class Rect{				/*Class is defined here .*/
		public $length,$breadth;		/*variables are defined here, and used public because we have to use these variables inside the functions.*/
		function Rect($x,$y){			/*defined a constructor here, which are passed at the time of object creation.*/
			$this->length = $x;			/*assgning the value to these variables.*/
			$this->breadth = $y;
		}

		function find_area(){			/*defined a variable here .*/
			return $this->length * $this->breadth;
		}
	}

	$rect = new Rect(2,3);			/*made an object of the class named Rect, and passing the value to it.*/
	echo $rect->find_area();		/*using object, calling the function inside that class.*/

?>