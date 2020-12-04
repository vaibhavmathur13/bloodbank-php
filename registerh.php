<?php include 'includes/header.php'; ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'includes/_dbconnect.php';
	$name = $_POST['hospitalname'];
	$pass = $_POST['password'];


	$s = "SELECT * FROM `hospital` WHERE `hospitalname`='$name'";
	$rs = mysqli_query($con, $s);
	$num = mysqli_num_rows($rs);


	if($num==1){
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Error!</strong> Your Hospital has already been registered in the Blood Bank.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
	}
	else{
		$sql ="INSERT INTO `hospital` (`hospitalname`, `password`) VALUES ('$name', '$pass')";
		$result = mysqli_query($con, $sql);
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Congratulations!</strong> Your Hospital has been registered in the Blood Bank.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
	}
}
?>
<?php include 'includes/footer.php'; ?>