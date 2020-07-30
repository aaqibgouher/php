<?php

// $arr = array("nazish", "aaqib", "danish");
$arr = ["nazish", "aaqib", "danish"];
echo json_encode($arr);

echo "<br>";

# access element
echo $arr[0];

echo "<br>";

echo count($arr);

echo "<br>";

// assosiative array
$arr = ["name" => "nazish", "age" => 25];
echo json_encode($arr);

echo "<br>";

// from database
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


