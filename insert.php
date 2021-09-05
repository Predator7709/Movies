<html>
<body>
<h1><center>MOVIE COLLECTION</center></h1>
<center>
<form name="A" action="insert.php" method="POST"> 
Movie Name:
<input type="text" name="Name"><br><br>
Actor Name:
<input type="text" name="Actor"><br><br>
Actress Name:
<input type="text" name="Actress"><br><br>
Director Name:
<input type="text" name="Director"><br><br>
Year of Release:
<input type="text" name="Yearofrelease"><br><br><br>
<input type="submit" value="Add" name="submit"><br>
</form>
</center>
<a href="home.php">GO TO HOME</a>
<?php
if(isset($_POST["submit"]))
{
	$Name=$_POST['Name'];
	$Actor=$_POST['Actor'];
	$Actress=$_POST['Actress'];
	$Director=$_POST['Director'];
	$Yearofrelease=$_POST['Yearofrelease'];
	include("conn.php");
	$sql="INSERT INTO collection(Name,Actor,Actress,Director,yearofrelease)VALUES ('$Name','$Actor','$Actress','$Director',$Yearofrelease)";
	if(mysqli_query($conn,$sql))
	{

        echo"new movie added successfully"; 
	}
	else
	{
	  echo"error:";
	}
}
?>
</body>
</html>
