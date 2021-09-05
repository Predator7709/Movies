<html>
<body>
	<center>
		<form name=f1 action="search.php" method="POST">
			Actor : <input type=text name=srch><br><br>
			<input type='submit' name='submit' value='find'>
		</form>
	</center>
   
<?php
if(isset($_POST["submit"]))
{
$srch=$_POST['srch'];
include("conn.php");
$sql="SELECT * from collection where Actor='$srch'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
   {
     echo'<table border=1><tr>
    	            <th>Name</th>
    	            <th>Actor</th>
    	            <th>Actress</th>
    	            <th>Director</th>
                    <th>Yearofrelease</th></tr>';
 
  while($row=mysqli_fetch_assoc($result))
{

	echo "<tr>"."<td>".$row['Name']."</td>";
	echo "<td>".$row['Actor']."</td>";
	echo "<td>".$row['Actress']."</td>";
	echo "<td>".$row['Director']."</td>";
	echo "<td>".$row['Yearofrelease']."</td>";
	echo "</tr>";

}
}                 
else
{
	echo "<script type='text/javascript'>";
	echo "alert('Actor is not found')";
	echo "</script>";
}
}
?>
</table> 
</body>
</html>
