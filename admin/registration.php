<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="1" bgcolor="WHITE" align="center" width="54%">
<tr bgcolor="aqua">
<td align="center">
<font size="5">
<a href="adminpanel.php">Home</a> 
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid"  size=8 maxlength=8 required placeholder=""/>
<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname"  size=20 maxlength=20 required placeholder="Name" />
<span class="required_notification"> Required</span></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dob" size=12 maxlength=12 required placeholder="YYYY-MM-DD" />
	<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address"  size=12 maxlength=12 required placeholder="" />
<span class="required_notification"> Required</span></td>
</tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
        <td> <select name="offence">
        <option>Murder</option>
		<option>Robbery</option>
		<option>Trafficking</option>
        <option>Assault</option>
		<option>Other</option></td></tr>
		
		<tr>
<td bgcolor="#FFFFFF"><b>Date Admitted:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="di"  size=12 maxlength=12 required placeholder="YYYY-MM-DD"/>
	<span class="required_notification"> Required</span></td>


</tr>

<tr>
<td bgcolor="#FFFFFF"><b>Sentence:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="sentence"  size=12 maxlength=12 required placeholder="5 years" />
	<span class="required_notification"> Required</span></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Prison:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="prison"  size=12 maxlength=12 required placeholder="Bangalore" />
	<span class="required_notification"> Required</span></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr>   <?php
           include("footer.php");
                ?>
          </tr>
</tr>
</table>
</body>
</html>