<?php
		// taken a string 
		$sentense = "My Name is Aaqib Gouher. I am a student of 2nd year in The Oxford College Of Science. Everyone call me aaqib !";

		// a pattern that we we want to search in that expression.
		$pattern = "/Aaqib/i";		

		// It will match first occurence of that pattern , and return 1 if will match else return 0.
		echo preg_match($pattern,$sentense)."<br>";		

		// It will return all of the count of that pattern
		echo preg_match_all($pattern,$sentense)."<br>";		

		// this will replace the pattern with some other text from the sentense. and will return the new sentense.
		echo preg_replace($pattern,"Gouher",$sentense)."<br>";		

?>