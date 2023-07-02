<?php

// Database Connection

$host="localhost";
$uname="root";
$pass="";
$database = "prisonpro";	

$connection=mysqli_connect($host,$uname,$pass); 
if (mysqli_connect_errno()) {
	echo "Failed to connect to mysqli: " . mysqli_connect_error();
  }

$selectdb=mysqli_select_db($connection,$database) or die("Database could not be selected");	
$result=mysqli_select_db($connection,$database)
or die("database cannot be selected <br>");

	
// Fetch Record from Database

$output			= "";
// $table 			= "registration"; // Enter Your Table Name
$sql 			= mysqli_query($connection,"select * from registration");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name
while($property = mysqli_fetch_field($sql))
{
	$heading = $property->name;
	$output		.= '"'.$heading.'",';
}
$output .="\n";

// for ($i = 0; $i < $columns_total; $i++) {
// 	$heading	=	mysqli_fetch_field_direct($sql, $i)->name;
// 	$output		.= '"'.$heading.'",';
// }
// $output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename =  "prisoner_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>
