<?php
$servername="localhost";
$username="root";
$db="movies";
$conn=mysqli_connect($servername,$username,"",$db);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
