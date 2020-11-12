<?php
	// Use of public and Protected Access Modifier :
	// class Fruits{
	// 	protected $color = "";
	// 	protected $name = "";

	// 	public function __construct($name,$color){
	// 		$this->name = $name;
	// 		$this->color = $color;
	// 	}

	// 	protected function get_name(){
	// 		echo "Name = ".$this->name."<br>";
	// 	}
	// }

	// class Apple extends Fruits{
	// 	public function get_name_color(){
	// 		echo "Name = ".$this->name." Color = ".$this->color;
	// 	}
	// }

	// $apple = new Apple("Apple","Red");
	// $apple->get_name_color();

	// Method Overriding :

	// class Fruits{
	// 	public $color = "";

	// 	public function __construct(){

	// 	}

	// 	public function get_details(){
	// 		echo "Name of The Fruits is ".$this->color;
	// 	}
	// }

	// class Apple extends Fruits{
	// 	public $name = "";
	// 	public function __construct($name,$color){
	// 		$this->name = $name;
	// 		$this->color = $color;
	// 	}

	// 	public function get_details(){
	// 		echo "Name of The Fruits is ".$this->name." and Color is ".$this->color;
	// 	}
	// }

	// $apple = new Apple("Apple","Red");
	// $apple->get_details();


	// Abstract class and Method :

	// abstract class Car{
	// 	public $name = "";

	// 	public function __construct($name){
	// 		$this->name = $name;
	// 	}

	// 	abstract public function intro();
	// }

	// class Bmw extends Car{
	// 	public function intro(){
	// 		echo "The Car name is ".$this->name."<br>";
	// 	}
	// }

	// class Audi extends Car{
	// 	public function intro(){
	// 		echo "The Car name is ".$this->name."<br>";
	// 	}
	// }

	// $bmw = new Bmw("BMW");
	// $bmw->intro();

	// $audi = new Audi("Audi");
	// $audi->intro();

	// Interface and its immplementation :

	// interface Car{
	// 	public function about();
	// }

	// class Lambo implements Car{
	// 	public function about(){
	// 		echo "The Car name is Lambo"."<br>";
	// 	}
	// }

	// class Ferrari implements Car{
	// 	public function about(){
	// 		echo "The Car name is Ferrari"."<br>";
	// 	}
	// }

	// $lambo = new Lambo();
	// $ferrari = new Ferrari();
	// $cars = [$lambo,$ferrari];

	// foreach($cars as $car){
	// 	$car->about();
	// }

	// Traits :

	// trait Car{
	// 	public function message($car_name){
	// 		echo "The car name is ".$car_name."<br>";
	// 	}
	// }

	// trait Bike{
	// 	public function message_bike($bike_name){
	// 		echo "The bike name is ".$bike_name."<br>";
	// 	}
	// }

	// class Audi{
	// 	use Car;
	// }

	// class Mercedez{
	// 	use Car,Bike;
	// }

	// $audi = new Audi();
	// $audi->message("Audi");

	// $mercedez = new Mercedez();
	// $mercedez->message("Mercedez");
	// $mercedez->message_bike("Mercedez");

	// Static Method :

	// class Car{
	// 	public static function get_name($name){
	// 		echo "The Car name is ".$name;
	// 	}
	// }

	// Car::get_name("Mercedez");

	// class Car{
	// 	public static function get_name(){
	// 		echo "My name is Aaqib";
	// 	}

	// 	public function __construct(){
	// 		self::get_name();
	// 	}
	// }

	// $audi = new Car();
?>

	