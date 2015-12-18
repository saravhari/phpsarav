<html>
<head>
<title>CALL LOG DATABASE2</title>
</head>
<body bgcolor="#faddad">
<form method="post" action="callMain1.php">
<h1 align="center"> INFORMATION OF PARTICULAR PHONE NUMBER</h1>
<hr /><br /> <br />
<select name="num" id="num">
	<option value="7801040509">7801040509</option>
	<option value="8801456932">8801456932</option>
	<option value="9290487758">9290487758</option>
	<option value="9640104815">9640104815</option>
	<option value="9000279886">9000279886</option>
	<option value="9440041211">9440041211</option>
	<option value="9949104304">9949104304</option>
	<option value="9705610817">9705610817</option>
	<option value="777771502">777771502</option>
	<option value="777250349">777250349</option>
	<option value="771028914">771028914</option>
	<option value="773012673">773012673</option>
	<option value="767367868">767367868</option>
	<option value="773778549">773778549</option>
	<option value="777670436">777670436</option>
</select>
<input type="submit" value="FILTER" name="sub" id="sub" />
</form>

<?php

$user='root';
$pass='';
$conn=mysql_connect('localhost','root','') or die("Database not connected");
echo"Successful connection";
mysql_select_db("sarav") or die(mysql_error());

$val = $_POST['num'];
$sql="select id,android_id,Name,Type,Number,Duration from calldetections WHERE Number ='".$val."'";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);

$name = $row['Name'];
echo "<br />";
echo "<table border=1 width=75% bgcolor=cyan>";
echo "<tr bgcolor=lightgreen>";
echo "<th>ANDROID ID</th> " ; echo "<td>".$row['android_id']."</td>";
echo "</tr>";
echo "<tr bgcolor=lightgreen>";
echo "<th>NAME</th>"; echo "<td>".$row['Name']."</td>";
echo "</tr>";
echo "<tr bgcolor=lightgreen>";
echo "<th>NUMBER</th>";echo "<td>".$row['Number']."</td>";
echo "</tr>";

$count = 1;
while($row=mysql_fetch_array($result))
{
	//echo "<td>".$row['Duration']."</td>";
	//echo "</tr>";
	
	$count++;
}
echo "<tr bgcolor=lightgreen>";
echo "<th>No.OF calls</th>";echo "<td>".$count."</td>";
echo "</tr>";
echo "</table>";
echo "<br />";
echo "<br /> <br /><h1>** TOTAL NO.OF CALLs MADE By ".$name." : ".$count."</h1>";
?>

</body>
</html>