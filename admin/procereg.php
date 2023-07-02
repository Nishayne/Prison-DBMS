<?php
//set up for mysqli Connection
$con= mysqli_connect("localhost","root", "","prisonpro");
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(mysqli_connect_errno() )
{
  echo "Could not connect: " . mysqli_connect_error();
}

//we specify here the Database name we are using

$Nid=$_POST['Nid'];
$Fname=$_POST['Fname'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$Gender=$_POST['Gender'];
$offence=$_POST['offence'];
$di=$_POST['di'];
$sentence=$_POST['sentence'];
$prison=$_POST['prison'];
//Protecting form submitting an empty data

if (!$Nid || !$Fname  || !$dob  || !$address || !$Gender || !$offence || !$di || !$sentence || !$prison )
	{
	echo'<body bgcolor="aqua">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='registration.php'>"."  ". "here"  . "</a>"  . "  " . "to Prisoners registration"."</font>";
	echo'</center>';
	echo'</body>';
      exit;
	}

//It wiil insert a row to prisoners`
$sql = "INSERT INTO `prisonpro`.`registration` (`id`,`Full_Name`, `DOB`, `Address`, `Gender`, `Offence`, `Datein`, `Sentence`,`Prison`) 
	VALUES ('{$Nid}', '{$Fname}', '{$dob}', '{$address}', '{$Gender}','{$offence}','{$di}', '{$sentence}','{$prison}');";
//we are using mysqli_query function. it returns a resource on true else False on error
if (!mysqli_query( $con,$sql ) )
{
  die('The data is already: ' . mysqli_error($con));
 
}

?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "registration.php";
					</script>
					<?php
//close of connection
mysqli_close($con);
?>

