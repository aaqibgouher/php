<?php

$str = "aaqib";		/*defined a variable, and assigned value in it.*/

echo $str;			/*printing its value. we can show output using echo as well as print.*/

echo "<br>";			/*used a break tag og html. It will break the line.We can write our html codes in the double quotes.*/

echo strlen($str);		/*this function will return size of the string.*/

echo "<br>";

$str_long = "this is a long string";		
echo str_word_count($str_long);		/*this predefined function will count the number of the words in the var str_long.*/

echo "<br>";

echo strrev($str_long);			/*this func will reverse the string, that we will pass here.*/

echo "<br>";

echo strpos("hello world", "world");		/*function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
*/

echo "<br>";

echo str_replace("world", "nazish", "hello world");		/*function replaces some characters with some other characters in a string. str-replace("which word or char","to which","sentence or word.")*/

echo "<br>";

echo md5("nazish");			/*cryptographic hash function, we will learn it later.*/

echo "<br>";

$arr = ["hello", "world"];
echo implode($arr, " ");		/*it will take the array , and the separator thorugh which we will add. here hello and world are in other indexes, so it will merge with space and print hello world.*/

echo "<br>";

$str_long_arr = explode(" ", $str_long);		/*Breaks a string into an array*/
var_dump($str_long_arr);

echo "<br>";

echo json_encode($str_long_arr);		/*used for printing array in json format.*/

?>