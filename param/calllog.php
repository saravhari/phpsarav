<?php

$user='root';
$pass='';
$conn=mysql_connect('localhost','root','') or die("Database not connected");
echo"Successful connection";
mysql_select_db("sarav") or die(mysql_error());

$sql="select id,android_id,Name,Type,Number,Duration from calldetections WHERE Type ='".$_POST['inout']."'";
$result=mysql_query($sql);
echo "<br />";
echo "<table border=1 width=75% bgcolor=lightgreen>";
echo "<tr>";
echo "<th>ID</th><th>ANDROID ID</th><th>NAME</th><th>NUMBER</th><th>DURATION</th><th>TYPE</th>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['android_id']."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['Type']."</td>"; 
	echo "<td>".$row['Number']."</td>";
	echo "<td>".$row['Duration']."</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br />";

?>