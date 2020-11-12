<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	try{
		$user_name = trim($_REQUEST['name']);
		$user_email = trim($_REQUEST['email']);
		$user_pass = trim($_REQUEST['pass']);
		$user_confirm_pass = trim($_REQUEST['confirm_pass']);

		if(!$user_name) throw new Exception("Name is required !");
		if(!$user_email) throw new Exception("Email is required !");
		if(!$user_pass) throw new Exception("Password is required !");
		if($user_pass != $user_confirm_pass) throw new Exception("Password is not matched !");
		

		$hostname = "localhost";
    	$username = "root";	
    	$password = "root";
    	$database = "my_db";

    	$con = mysqli_connect($hostname,$username,$password,$database);

    	if(!$con){
    		throw new Exception(mysqli_connect_error());	
    	}

		$result =  mysqli_query($con, "select * from users where email = '$user_email'");
		
		$users = mysqli_num_rows($result);
		// echo json_encode($users);

    	if($users) throw new Exception("Email has already taken !");
    	
		$result = mysqli_query($con, "insert into (id, name, email, password) users values (null,'$user_name','$user_email','$user_pass');");
		if($result){
			$message = "Successfully Registered ! <br>";
		}else{
			$error = "Error : ".mysqli_error($con);
		}

	}catch(Exception $e){
		$error = $e->getMessage();
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Registration-page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    	*{
    		margin: 0px;
    		padding: 0px;
    	}

    	.my-div{
    		margin-top: 50px;
    		padding: 20px;
    	}
    </style>

    
        
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Registration form </h1>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 my-div">
				<?php if($error){
					echo '<div class="alert alert-danger">'.$error.'</div>';
				}?>
				<?php if($message):?>
					<div class="alert alert-success"><?php echo $message;?></div>
				<?php endif;?>

				<form action="register.php" method="post">
					<div class="form-input">
					    <label for="name">Name :</label><br>
					    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required><br>
				  	</div>
					<div class="form-input">
					    <label for="email">Email :</label><br>
					    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required><br>
				  	</div>
					<div class="form-input">
						<label for="pass">Password:</label><br>
					    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="pass" required>
					</div><br>
					<div class="form-input">
						<label for="confirm_pass">Confirm Password:</label><br>
					    <input type="password" class="form-control" id="confirm_password" placeholder="Enter Your Confirm Password" name="confirm_pass" required>
					</div>
					<br>
					<p>If You have already registered then <a href="loggin.php">Click to Loggin</a></p>
					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>