<?php
$servername="localhost";
$username="root";
$password="";
$database="flip";
$Id=$_GET['Id'];

$conn=mysqli_connect($servername,$username,$password,$database);

$sql="DELETE FROM flip WHERE Id=$Id";

$data=mysqli_query($conn,$sql);
if($data)
{
	echo "deleted";
}
else
{
	echo "failed";
}