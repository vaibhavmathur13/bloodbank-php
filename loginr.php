<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'includes/_dbconnect.php';
	$name = $_POST['receivername'];
	$pass = $_POST['password'];


	$sql = "SELECT * FROM `receiver` WHERE receivername = '$name' AND password = '$pass'";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);
	if($num == 1){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["receivername"] = $name;
		header("location: receiverhome.php");
	}
	else{
		echo "Invalid Credentials. Please try again.";
	}
}
?>



<?php include 'includes/header.php'; ?>
<h3 class="text-center">Login as Receiver</h3>
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<form action="/loginr.php" method="post">
			<div class="form-group">
				<label>Receiver's Name</label>
				<input type="text" name="receivername" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
	<div class="col-lg-4"></div>
</div>

<?php include 'includes/footer.php'; ?>