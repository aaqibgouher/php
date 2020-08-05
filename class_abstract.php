<?php

	// Abstract class : An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
	
	// We cant create the object of the abstract class .

	// The class that extends the abstract class must implement the abstract method that has implemented in the abstract class . 

	// If we have defined an abstract classs ,then it is not necessary that we have to define abstract method as well.

	// It is not necessary that if a class is defined with abstract , then there should be an abstract method as well ,it many be or may not be. But if a class is not defined with the abstract , then there should not be any abstract method ..

	// the abstract method can have the incoming parameters as well ..

	// The child class may define optional arguments that are not in the parent's abstract method
	
	abstract class Father{			/*abstract class is defined here.*/
		public function random(){			
			echo "Hello<br>";
		}

		abstract function name();		/*abstract method is declared here, not defined the method> it should defined in the child class.*/
	}

	class Son extends Father{		/*son class is extending the parent classs.*/
		public function name(){				/*abstract method of the parent class is defined here.*/
			echo "Abstract method is implemented inside the child class.";
		}
	}

	$son = new Son;			/*we cant make the object of the abstract class, therefore have make the class of the child class.*/
	$son->name();			/*so we have called that method from child class.*/

	
?>