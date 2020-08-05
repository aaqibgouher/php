<?php

	// defined a class names Area;
	class Area{
		public $length,$breadth;		/*defined local variables.*/

		public function __construct($x,$y){		/*defined constructor for the Area class, with some parameters ...*/
			$this->length = $x;
			$this->breadth = $y;
		}

		protected function find_area(){			/*defined function inside parent class with protected access modifier.*/
			echo $this->length * $this->breadth;			
		}
	}

	class Rect extends Area{		/*defined a class names Rect which is extending from Area class.*/

		function hello(){			/*defined a function inside child class ..*/
			echo "Hello from Rect !"."<br>";
			$this -> find_area();			/*we cant call the class with protected modifier from outside the class . In protected , we can access it from same class or from inherited class , therefore we have called it from its child class.*/
		}
	}

	$rect = new Rect(2,3);		/**/
	$rect->hello();				/**/
	

?>