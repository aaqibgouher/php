<?php

$str = "aaqib";

echo $str;

echo "<br>";

echo strlen($str);

echo "<br>";

$str_long = "this is a long string";
echo str_word_count($str_long);

echo "<br>";

echo strrev($str_long);

echo "<br>";

echo strpos("hello world", "world");

echo "<br>";

echo str_replace("world", "nazish", "hello world");

echo "<br>";

echo md5("nazish");

echo "<br>";

$arr = ["hello", "world"];
echo implode($arr, " ");

echo "<br>";

$str_long_arr = explode(" ", $str_long);
var_dump($str_long_arr);

echo "<br>";

echo json_encode($str_long_arr);

?>