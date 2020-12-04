<?php  

	session_start();
	include 'includes/_dbconnect.php';
	$name = $_SESSION["receivername"];
	$sql = "SELECT * FROM `bloodinfo` WHERE bloodtype IN (SELECT bloodgroup FROM `receiver` WHERE receivername = '$name')";
	$result = mysqli_query($con, $sql);

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		include 'includes/_dbconnect.php';
		$hname = $_POST['hospitalname'];
		$bg = $_POST['bloodtype'];
		$sql = "INSERT INTO `request`(`hospitalname`, `receivername`, `bloodtype`) VALUES ('$hname', '$name', '$bg')";
		$r = mysqli_query($con, $sql);
	}
 
?>


<?php include 'includes/header.php'; ?>
<h2 class="text-center"><?php

echo "WELCOME, " . $_SESSION["receivername"];

?></h2>
<p class="text-center"> <a href="/logout.php"> Click here to logout.</a></p>
<br><br>
<h4>List of Available Blood Samples:</h4><br>
<?php
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo "Hospital: " . $row["hospitalname"]. " - Bloodtype: " . $row["bloodtype"] . "  ";
		}
	}
?><br><br>
<div class="row">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<form action="/receiverhome.php" method="post">
			<div class="form-group">
				<label>Hospital's Name</label>
				<input type="text" name="hospitalname" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Blood Type</label>
				<input type="text" name="bloodtype" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Request</button>
		</form>
	</div>
	<div class="col-lg-4"></div>
</div>

<?php include 'includes/footer.php'; ?>