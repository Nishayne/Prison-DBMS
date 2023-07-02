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

//or die("Database Connection Failed");
$selectdb=mysqli_select_db($connection,$database) or die("Database could not be selected");	
$result=mysqli_select_db($connection,$database)
or die("database cannot be selected <br>");

	
// Fetch Record from Database

$output			= "";
// $table 			= "transfer"; // Enter Your Table Name
$sql 			= mysqli_query($connection,"select * from court");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name
while($property = mysqli_fetch_field($sql))
{
	$heading = $property->name;
	$output		.= '"'.$heading.'",';
}
$output .="\n";

// Get The Field Name

// for ($i = 0; $i < $columns_total; $i++) {
// 	$heading	=	mysqli_field_name($sql, $i);
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

$filename =  "court report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>


       
       