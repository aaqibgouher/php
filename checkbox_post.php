<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="post" action="checkbox_post.php">		
		Apple : <input type="checkbox" name="fruits[]" value="apple"><br>
		Banana : <input type="checkbox" name="fruits[]" value="banana"><br>
		Mango : <input type="checkbox" name="fruits[]" value="mango"><br><br>
		<input type="submit" name="submit">
	</form>
	<br><br>

	<?php
	
		$arr = $_POST["fruits"];
				
		echo $arr[0]." ".$arr[1]." ".$arr[2];
	?>
	
	
</body>
</html>