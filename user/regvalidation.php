<!--<?php
mysqlii_close($config);
?>
 script of executing problem -->  
<?php
$con=mysqlii_connect("localhost","root","","prison");
// Check connection
if (mysqlii_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqlii_connect_error();
}

//escape variable for security here or problem
$Nid=$_POST['Nid'];
$Fname = $_POST['Fname'];
//deal with date and concatenate variables month, day, year
 $month=$_POST['month'];
 $day=$_POST['day'];
 $year=$_POST['year'];
$dob=$year.'/'.$month.'/'.$day;
$address= $_POST['address'];
$county = $_POST['county'];
$Gender = $_POST['Gender'];
$education	= $_POST['education'];
$status= $_POST['status'];
$offence = $_POST['offence'];
//deal with date and concatenate variables month, day, year
 $month=$_POST['month'];
 $day=$_POST['day'];
 $year=$_POST['year'];


 $di = $month . '/' .$dDay . '/' . $dYear;
        $dateoftransfer = date('Y-m-d',strtotime($di));

$sentence	= $_POST['sentence'];
$Filenum= $_POST['Filenum'];

//we are using mysqli_query function. it returns a resource on true else False on error

 $sql1 = "INSERT INTO registration (id, Full_Name, DOB, Address, County,Gender, Education, Marital, Offence, Date_in,sentence, File_num)
 VALUES ('$Nid', '$Fname', '$dob', '$address', '$county', '$Gender', '$education', '$status', '$offence', '$di', '$sentence', '$Filenum');";




if (!mysqlii_query($con,$sql1)) {
  die('Error: ' . mysqlii_error($con));
}
?>
	<script type="text/javascript">
						alert("you have succefully add the record !thank you");
						window.location = "registration.php";
					</script>