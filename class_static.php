<?php

	// Static methods can be called directly - without creating an instance of a class.means If inside any class , there is a method with static ,then we dont need to create the object of that class to acces that method . This is the defination of the static in simple word.

	// 1.accessing the function from outside the class 
	class Rect{

		public static function find_area($x,$y){
			return $x * $y;
		}
	}

	echo Rect::find_area(4,3)."<br>";				/*syntax : class_name::method_name;*/
	
	// 2.accessing the static method from other method in the same class

	class Square{		/*defined a class*/

		public static function find_area($x){		/*static method defined here.*/
			return $x * $x;	
		}

		public function get_side($x){			/*defiend another method inside the class , from where we are calling that static function using self keyword.*/
			echo self::find_area($x)."<br>";
		}

	}

	Square::get_side(2);		/*calling the method .*/

	// 3.what if we want to access the static method of parent class from child class ...

	class Area{				/*parent class*/
		protected static function find_area($r){		/*static method inside parent class. we can use protected as well as public here.*/
			echo "Ares is ".(3.14 * $r * $r);
		}
	}

	class Circle extends Area{			/*child class extending from parent class*/
		public function get_area($rad){			/*defined a method , taking a radius !*/
			parent::find_area($rad);		/*calling the parent's static method from here.*/
		}
	}

	$cir = new Circle;		/*formed child object*/
	$cir->get_area(3);			/*calling a method of child class and passing radius.*/


?>