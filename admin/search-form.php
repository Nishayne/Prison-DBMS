<html>
<head>
  
  <title>PRISONERS Search RECORD</title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table align="center" border="1" bgcolor="black" width="600" cellpadding="8" cellspacing="0" height="415">
          <tr>
            <td colspan="0" height="246"><img src="banner.gif" width="1045" height="230""></td>
          </tr>
          <tr>
            <td colspan="8" bgcolor="aqua" height="3" align="center">
			
			
		<font size="5">  
		 <a href="../index.php">Logout</a> |
         <a href="adminpanel.php">Admin Panel</a>
          </font>
            </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><h1> Search Prisoners By ID</h1>
        <form action="Search.php" method="get">
           <label>ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td>

    <tr>
     <td align="center" bgcolor="#FFFFFF"><h1> Search Officer By ID</h1>
        <form action="Search1.php" method="get">
           <label> Officer ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></td></tr>
<tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Search Visitor By ID</h1>
        <form action="Search3.php" method="get">
           <label> Visitors ID:
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

    <tr>
     
      <td align="center" bgcolor="#FFFFFF"><h1> Search Transfer By ID</h1>
        <form action="Search2.php" method="get">
           <label> National  Id :
         <input type="text" name="keyname" />
       </label>
          <input type="submit" value="Search" />
      </form>
     <td height="191" bgcolor="#FFFFFF"></td></tr>

<td width="7%" bgcolor="#FFFFFF"></td>
<td width="2%" bgcolor="#FFFFFF"></td>


<tr>
<td bgcolor="aqua" colspan="3" align="center">
<?php
           include("footer.php");
                ?>
</tr>
</table>
</body>
</html>