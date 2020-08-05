<?php
	// Class and Object 

	class Rect{				/*Class is defined here .*/
		public $length,$breadth;		/*variables are defined here, and used public because we have to use these variables inside the functions.*/
		function Rect($x,$y){			/*defined a constructor here, which are passed at the time of object creation. we can use it as well or __construct() also.*/
			$this->length = $x;			/*assgning the value to these variables.*/
			$this->breadth = $y;
		}

		function find_area(){			/*defined a variable here .*/
			return $this->length * $this->breadth;
		}

		function __destruct(){		/*PHP will automatically call this function at the end of the script. After executing all the things, at last this will call.*/
			echo "Area is ".($this->length * $this->breadth);
		}
	}

	$rect = new Rect(2,3);			/*made an object of the class named Rect, and passing the value to it.*/
	echo $rect->find_area()."<br>";		/*using object, calling the function inside that class.*/

	echo var_dump($rect instanceof Rect)."<br>";   	/*object is an instance of class. using this we can check that , any object that we have created has class or not, it will return a boolean.*/

	 
?>