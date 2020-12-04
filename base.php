<?php  
session_start();
$_SESSION["name"] = "Vaibhav";
$_SESSION["email"] = "mathur130699@gmail.com";

?>
<?php include 'includes/header.php'; ?>

	<div class="row">
		<div class="col-lg-6">
			<strong><h5>Register as Hospital</h5></strong>
			<br><br>
			<form action="/registerh.php" method="post">
				<div class="form-group">
					<label>Hospital Name</label>
					<input type="text" name="hospitalname" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		
		<div class="col-lg-6">
			<strong><h5>Register as Receiver</h5></strong>
			<br><br>
			<form action="/registerr.php" method="post">
				<div class="form-group">
					<label>Receiver's Full Name</label>
					<input type="text" name="receivername" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Receiver's Blood Group</label>
					<input type="text" name="receiverbg" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
	<br><br>
	<button type="button" class="btn btn-primary"><a href="/availablebs.php">Available Blood Samples</a></button>

<?php include 'includes/footer.php'; ?>