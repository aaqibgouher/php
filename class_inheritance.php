<?php
	
	// Inheritance :
	class Area{		/*Defined a class named Area.*/	
		public $length,$breadth;		/*defined an instance var which is of public modifier.*/

		function __construct($x,$y){		/*Defined a constructor for Area class with some para coming during the object creation.*/
			$this->length = $x;			/*And assigned the instance var with that upcoming values.*/
			$this->breadth = $y;
		}

		function find_area(){			/*defined a instance method which will fing the area.*/
			return $this->length * $this->breadth;
		}
	}

	class Rect extends Area{			/*Defined another class names Rect which is extending that Area class , so all of the property of Area class will now also in Rect class.*/
		function hello(){			/*defined a method inside that Rect class.*/
			echo "Hii from Rect method .";
		}
	}

	$rect = new Rect(3,4);			/*formed an object for the Rect class and passed the values to it. Now one thing, we have created constructor for Area class not for Rect class, and here we are passing the value to it. So we have extended it with Area so, the value that we are passing in the Rect class will go on Area's constructor . So it will assign the variables with the values. After extending a class with other class, then extended class(child) will hold all the property of the parent class.*/
	echo $rect->find_area()."<br>";			
	echo $rect->hello();


	

?>