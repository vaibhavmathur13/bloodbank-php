<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'includes/_dbconnect.php';
	$name = $_POST['hospitalname'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM `hospital` WHERE hospitalname = '$name' AND password = '$pass'";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);
	if($num == 1){
		session_start();
		$_SESSION["loggedin"] = true;
		$_SESSION["hospitalname"] = $name;
		header("location: hospitalhome.php");
	}
	else{
		echo "Invalid Credentials. Please try again.";
	}
}
?>



<?php include 'includes/header.php'; ?>
<h3 class="text-center">Login as Hospital</h3>
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<form action="/loginh.php" method="post">
			<div class="form-group">
				<label>Hospital Name</label>
				<input type="text" name="hospitalname" class="form-control" required>
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