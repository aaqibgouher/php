<?php

	// defined a class names Area;
	class Area{
		public $length,$breadth;		/*defined local variables.*/

		public function __construct($x,$y){		/*defined constructor for the Area class, with some parameters ...*/
			$this->length = $x;
			$this->breadth = $y;
		}

		function hello(){		/*defined a function names hello . It is in parent class.*/
			echo "Hello from Area class !";
		}

		
	}

	class Rect extends Area{		/*defined a class names Rect which is extending from Area class.*/

		public function hello(){			/*defined a function inside child class ..*/
			echo "Hello from Rect class !"."<br>";
			
		}
	}

	$rect = new Rect(2,3);		/*formed an object for child class.*/
	$rect->hello();				/*Now we are calling the hello function which is present in both parent class as well as in child class . now this is the case of method overridding. Hence in this , even both function has the same name, but the child function will call. This is the concept of method overriding. */
	

?>