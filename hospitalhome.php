<?php 
	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
		header("location: base.php");
		exit;
	}
?>
<?php
	session_start();
	$name =  $_SESSION["hospitalname"];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		include 'includes/_dbconnect.php';
		$bt = $_POST['bloodtype'];
		$sql   ="INSERT INTO `bloodinfo` (`hospitalname`, `bloodtype`) 
				VALUES ('$name', '$bt')";
		$result = mysqli_query($con, $sql);
	}
?>


<?php include 'includes/header.php'; ?>
<h2 class="text-center"><?php

echo "WELCOME, " . $_SESSION["hospitalname"];

?></h2>
<p class="text-center"> <a href="/logout.php"> Click here to logout.</a></p>
<br><br>
<div class="row">
	<div class="col-lg-4">
		<h3 class="text-center">Add Blood Information</h3>
		<form action="/hospitalhome.php" method="post">
			<div class="form-group">
				<label>Blood Type</label>
				<input type="text" name="bloodtype" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Add Blood Sample</button>
		</form>
	</div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<button class="btn btn-primary"><a href="/requesth.php">View Requests</a></button>
	</div>
</div>


<?php include 'includes/footer.php'; ?>