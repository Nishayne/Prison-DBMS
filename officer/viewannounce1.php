<html>
<head>
  <title>View Announce Details by Officer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='aqua' width='800' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="prisonpro";
$tbl_name="announce";

$con=mysqli_connect("$host","$username","$password") or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot connect");

$sel= mysqli_query($con,"select * from $tbl_name");
echo"<table align='center' bgcolor='aqua' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>ANNOUNCE  DETAILS</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>To</th>
<th width='10%'>Id</th>
<th width='15%'>Subject</th>
<th width='10%'>Message</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";
echo  "<td width='3%'>".$row ['to']."</td>";
echo  "<td width='10%'>".$row ['Id']."</td>";
echo  "<td width='10%'>".$row ['subject']."</td>";
echo  "<td width='10%'>".$row ['message']. "</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" bgcolor='aqua'><a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
			<a href="deleteannounce1.php" target="_parent">Delete <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
		
          </tr>
          <tr>
            <td align='center' bgcolor='GREY' height='1'><?php
           
                ?>
            </td>
          </tr>
	</table>
</body>
</head>
</htm