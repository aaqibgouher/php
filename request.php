<!DOCTYPE html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	try{
		// trim will remove all the white space from beg and end
		// '  nazish    ' => 'nazish'
		$fullname = trim($_REQUEST["fullname"]);
		$age = trim($_REQUEST["age"]);

		if(!$fullname) throw new Exception("Full Name is required");
		if(!$age) throw new Exception("Age is required");
		// if(!is_int($age)) throw new Exception("Age should be in integer.");
		if(strlen($fullname) > 10) throw new Exception("Name sould be less then 10");
		
		$message = "Successfully register";
	}catch(Exception $e){
		$error = $e->getMessage();
	}
	
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>my form</h1>
	<form method="post" action="request.php">
		<p>Full Name</p>
		<input type="text" name="fullname" required>
		<p>Age</p>
		<input type="text" name="age" required>
		<input type="submit" name="submit">
		<br>
		<?php if($error){ ?>
			<p style="color: red"><?php echo $error;?></p>
		<?php } ?>
		<?php if($message){ ?>
			<p style="color: green"><?php echo $message;?></p>
		<?php } ?>
	</form>
</body>
</html>
