<?php

# while
$n = 1;
while ($n <= 5) {
	echo $n;
	$n++;
}

echo "<br>out from while loop <br>";

# for
for($i=0;$i<5;$i++){
	echo $i;
}

echo "<br>out from for loop<br>";

# foreach only value
$arr = ["nazish", "aaqib", "danish"];
foreach($arr as $value){
	echo $value." ";
}

echo "<br>out from foreach<br>";

# foreach value and index
$arr = ["nazish", "aaqib", "danish"];
foreach($arr as $index => $value){
	echo $index." ".$value."<br>";
}

echo "<br>out from foreach<br>";

