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
$From=$_POST['From'];
$To=$_POST['To'];
$dot=$_POST['dot'];

//Protecting form submitting an empty data

if (!$Nid || !$From  || !$To || !$dot )
	{
	echo'<body bgcolor="aqua">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='officertransfer.php'>"."  ". "here"  . "</a>"  . "  " . "to Officer Transfer"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}
//It wiil insert a row to our recruit details`
$sql = "INSERT INTO `prisonpro`.`officer` (`National_id`, `From_prison`,`To_prison`,`Dateoftransfer`) 
	VALUES ('{$Nid}', '{$From}', '{$To}', '{$dot}');";
//we are using mysqli_query function. it returns a resource on true else False on error
if( !$mysqli_query($con,$sql) )
{
  die('Could not enter data: ' . mysqli_error($con));
} 
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "officertransfer.php";
					</script>
					<?php
//close of connection
mysqli_close($con);
?>