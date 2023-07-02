<?php
$con=mysqlii_connect("localhost","root","","prisonpro");
// Check connection
if (mysqlii_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqlii_connect_error();
}

// escape variables for security


$Nationalid= mysqlii_real_escape_string($con,$_POST['Nationalid']);
$Filenum=mysqlii_real_escape_string($con,$_POST['Filenum']);
//deal with date and concatenate variables month, day, year
 $month= mysqlii_real_escape_string($con,$_POST['month']);
 $day= mysqlii_real_escape_string($con,$_POST['day']);
 $year= mysqlii_real_escape_string($con,$_POST['year']);
$dateoftrial=$year.'/'.$month.'/'.$day;
$sentence= mysqlii_real_escape_string($con,$_POST['sentence']);
$location=mysqlii_real_escape_string($con,$_POST['location']);
$judge=mysqlii_real_escape_string($con,$_POST['judge']);
 

 $sql = "INSERT INTO court (National_id, File_number, Dateoftrial, Sentence, Location, Judge) 
VALUES ('$Nationalid', '$Filenum', '$dateoftrial', '$sentence', '$location', '$judge');";




if (!mysqlii_query($con,$sql)) {
  die('Error: ' . mysqlii_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "transfer.php";
					</script>