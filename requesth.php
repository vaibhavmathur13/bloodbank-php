<?php

session_start();
include 'includes/_dbconnect.php';
$name = $_SESSION["hospitalname"];

$sql = "SELECT `receivername`, `bloodtype` FROM `request` WHERE hospitalname = '$name'";
$result = mysqli_query($con, $sql);

?>
<?php include 'includes/header.php'; ?>
<h2 class="text-center">Blood Samples Requested</h2><br><br>
<h4><center>
	<?php  
		if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo "Receiver's Name: " . $row["receivername"]. " - Bloodtype: " . $row["bloodtype"] . "  ";
		}
	}
	?>
</center></h4>


<?php include 'includes/footer.php'; ?>