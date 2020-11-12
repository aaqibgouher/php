<?php


// Indexed array :
// $arr = array("nazish", "aaqib", "danish"); can also be created like that !
$arr = ["nazish", "aaqib", "danish"];
echo json_encode($arr);		

echo "<br>";

# access element
echo $arr[0];

echo "<br>";

echo count($arr);		/*Counting the size of $arr*/

echo "<br>";

// assosiative array
$arr = ["name" => "nazish", "age" => 25];			/*like dictionary*/
echo json_encode($arr);

echo "<br>";

// from database, the datas comes like that !!
$arr = [
	[
		"name" => "aaqib",
		"age" => 19
	],
	[
		"name" => "nazish",
		"age" => 25
	]
];
echo json_encode($arr);

echo "<br>";

$arr_name = array_column($arr, "name");
echo json_encode($arr_name);

// looping in assosciative array :
$arr = [
	[
		"name" => "Aaqib",
		"age" => 19,
		"combination" => "SMC"
	],
	[
		"name" => "Ajay",
		"age" => 19,
		"combination" => "SMC"
	],
	[
		"name" => "Subham",
		"age" => 18,
		"combination" => "ELECTRICAL"
	]
];

foreach($arr as $key => $value){
	echo $key." => ".json_encode($value)."<br>";
}

