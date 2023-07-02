<?php
$con=mysqli_connect("localhost","root","","prisonpro");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqli_connect_error();
}

// escape variables for security


$Nationalid= mysqli_real_escape_string($con,$_POST['Nationalid']);
$Filenum=mysqli_real_escape_string($con,$_POST['Filenum']);
//deal with date and concatenate variables month, day, year
 $month= mysqli_real_escape_string($con,$_POST['month']);
 $day= mysqli_real_escape_string($con,$_POST['day']);
 $year= mysqli_real_escape_string($con,$_POST['year']);
$dateoftrial=$year.'/'.$month.'/'.$day;
$sentence= mysqli_real_escape_string($con,$_POST['sentence']);
$location=mysqli_real_escape_string($con,$_POST['location']);
$judge=mysqli_real_escape_string($con,$_POST['judge']);
 

 $sql = "INSERT INTO court (National_id, File_number, Dateoftrial, Sentence, Location, Judge_Name) 
VALUES ('$Nationalid', '$Filenum', '$dateoftrial', '$sentence', '$location', '$judge');";




if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
	<script type="text/javascript">
						alert("You have successfully added a record ! Thank you");
						window.location = "transfer.php";
					</script>