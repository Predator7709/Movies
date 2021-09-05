<html>
<body>
<center>
<h1><FONT COLOR=green size=50px>MOVIE COLLECTION</FONT></h1>
</center><br><br><br><br><br>
<center>
<table width=2 border=2px><tr>
 <th>Name</th>
    	            <th>Actor</th>
    	            <th>Actress</th>
    	            <th>Director</th>
                    <th>Yearofrelease</th>
</tr>
</center>
<?php
include("conn.php");
$result=(mysqli_query($conn,"SELECT * from collection"));
while($user=mysqli_fetch_assoc($result))
{
    echo"<tr>";
    echo"<td>".$user['Name']."</td>";
	echo"<td>".$user['Actor']."</td>";
	echo"<td>".$user['Actress']."</td>";
	echo"<td>".$user['Director']."</td>";
	echo"<td>".$user['Yearofrelease']."</td>";
	echo"</tr>";
}
?>
</table>
</center>
</body>
</html>