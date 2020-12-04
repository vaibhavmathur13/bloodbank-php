<?php  

	session_start();
	include 'includes/_dbconnect.php';

	$sql = "SELECT * FROM `bloodinfo`";
	$result = mysqli_query($con, $sql);

?>

<?php include 'includes/header.php'; ?>
<?php

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
		echo "Hospital: " . $row["hospitalname"]. " - Bloodtype: " . $row["bloodtype"] . "<br>";
		}
	}

?>



<?php include 'includes/footer.php'; ?>