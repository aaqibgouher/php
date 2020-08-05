<?php

	// In PHP , we can only inherit a child class with one praent class , i.e each class should on parent class . so what we will do to inherit the multiple behaviour. for this we use Trait. We have to define it first, then for use it , we have to write "use" keyword in the class that we want to use.

	// 1. this is simple eg :
	trait Area{
		public function find_area(){
			return "this is from trail..<br>";
		}
	}

	class Rect{
		use Area;

	}

	$rect = new Rect;
	echo $rect->find_area();


	// 2. In this eg : we will see the multiple inheritence. Using trait, it is possible that a single child can have more that one parents. 
	trait First_class{			/*formed one parent trait*/
		public function message1(){			/*defined one of the method inside the parent trait.*/
			echo "From first parent class.<br>";
		}
	}

	trait Second_class{				/*formed second parent trait*/
		public function message2(){				/*defined second method inside the second parent trait*/
			echo "From second parent class..<br>";
		}
	}

	class Test{			/*formed a class named Test, it will act as a child*/
		use First_class;			/*used the first trait as a first parent*/
		use Second_class;			/*used the second trait as a second parent*/
	}

	$test_obj = new Test;			/*formed the object of child class*/
	$test_obj->message1();			/*accessing the first parents method using this object..*/
	$test_obj->message2();			/*accessing the second parents method using this object.*/

?>