<?php
$con=mysqlii_connect("localhost","root","","prisonpro");
// Check connection
if (mysqlii_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqlii_connect_error();
}

// escape variables for security
$prisonid = mysqlii_real_escape_string($con, $_POST['prisonid']);
$prisonname = mysqlii_real_escape_string($con, $_POST['prisonname']);
$location = mysqlii_real_escape_string($con, $_POST['location']);
$capacity = mysqlii_real_escape_string($con, $_POST['capacity']);
$population = mysqlii_real_escape_string($con, $_POST['population']);
//deal with date and concatenate variables month, day, year
			$month=mysqlii_real_escape_string($con, $_POST['month']);
			$day=mysqlii_real_escape_string($con, $_POST['day']);
			$year=mysqlii_real_escape_string($con, $_POST['year']);

$dateofconstruction=$year.'/'.$month.'/'.$day;
$admin = mysqlii_real_escape_string($con, $_POST['admin']);

// $sql = "INSERT INTO `prisonpro`.`prison` (`prisonid`,`prisoname`, `location`, `capacity`, `dateofcons`,  `Gender`, `Education`, `Marital`, `Offence`, `Date_in`, `File_num`) 
	// VALUES ('{$Nid}', '{$Fname}', '{$dob}', '{$address}', '{$county}', '{$Gender}', '{$education}', '{$status}', '{$offence}','{$di}', '{$Filenum}');";


$sql="INSERT INTO prison (prisonid, prisoname, location, capacity, population,  dateofcons, administrator)
VALUES ('$prisonid', '$prisonname', '$location','$capacity', '$population', '$dateofconstruction','$admin')";


if (!mysqlii_query($con,$sql)) {
  die('Error: ' . mysqlii_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "add.php";
					</script>
