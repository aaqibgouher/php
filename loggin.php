<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	try{

		$user_email = trim($_REQUEST['email']);
		$user_pass = trim($_REQUEST['pass']);

		if(!$user_email) throw new Exception("Email is required !");
		if(!$user_pass) throw new Exception("Password is required !");
		

		$hostname = "localhost";
    	$username = "root";	
    	$password = "root";
    	$database = "my_db";

    	$con = mysqli_connect($hostname,$username,$password,$database);

    	if(!$con){
    		throw new Exception(mysqli_connect_error());
    	}

    	$result_email = mysqli_query($con,"select * from users where email = '$user_email'");
    	$users = mysqli_num_rows($result_email);

    	if(!$users) throw new Exception("Correct Email is required !");

		$result_email_pass = mysqli_query($con,"select * from users where email = '$user_email' and password = '$user_pass'");
		
    	$users = mysqli_num_rows($result_email_pass);
    	
    	if(!$users) throw new Exception("Correct Password is required !");


		if($result_email_pass){
			$message = "Successfully Logged-In !";
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

	<title>Loggin-page</title>
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
		<h1 style="text-align: center;">Loggin form </h1>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 my-div">
				<?php if($error){
					echo '<div class="alert alert-danger">'.$error.'</div>';
				}?>
				<?php if($message):?>
					<div class="alert alert-success"><?php echo $message;?></div>
				<?php endif;?>

				<form action="loggin.php" method="post">
					
					<div class="form-input">
					    <label for="email">Email :</label><br>
					    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required><br>
				  	</div>
					<div class="form-input">
						<label for="pass">Password:</label><br>
					    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="pass" required>
					</div><br>
					<p>If You have not registered then <a href="register.php">Click to Register</a></p>
					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>