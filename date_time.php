<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Date And Time in PHP methods :</h1>
	<?php echo " Date is ".date("y/m/d")?><br>     <!--y = year,m = month,d = date-->
	<?php echo " Time is ".date("h:i:s")?><br>		<!--h = hour, i = minute, s = second-->
	<?php echo " Time is ".date("h:i:sa")?><br>
	<h3>Custom Time and Date with mktime():</h3>
	<?php 
		$d = mktime(11,14,57,8,9,2020);
		echo "Created Date is ".date("y/m/d h:i:sa", $d)."<br>"."Date is ".date("D-M-Y h:i:sa");
	?>
	<h3>Create Date and Time from string strtotime():</h3>
	<?php
		$d=strtotime("10:30pm April 15 2014");
		echo "Created date is " . date("Y-m-d h:i:sa", $d);
	?>

</body>
</html>

