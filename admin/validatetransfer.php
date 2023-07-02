<?php
$conn=mysqlii_connect("localhost","root","","prisonpro");
// Check connection
if (mysqlii_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqlii_connect_error();
}

// escape variables for security


$Nid= mysqlii_real_escape_string($con,$_POST['Nid']);
$Filenum=mysqlii_real_escape_string($con,$_POST['Filenum']);
$From= mysqlii_real_escape_string($con,$_POST['From']);
$To=mysqlii_real_escape_string($con,$_POST['To']);
//deal with date and concatenate variables month, day, year
 $month= mysqlii_real_escape_string($con,$_POST['month']);
 $day= mysqlii_real_escape_string($con,$_POST['day']);
 $year= mysqlii_real_escape_string($con,$_POST['year']);

 $dateoftransfer = $month . '/' .$dDay . '/' . $dYear;
        $dateoftransfer = date('Y-m-d',strtotime($dateoftransfer));
 


 $sql = "INSERT INTO transfer (National_id, File_num, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid', '$Filenum', '$From', '$To', '$dateoftransfer');";




if (!mysqlii_query($con,$sql)) {
  die('Error: ' . mysqlii_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "transfer.php";
					</script>