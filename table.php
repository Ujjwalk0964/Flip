<?php 

inclued "config.php";


$sql="create table Flip(Id int(20), Name varchar(20),Age int(2),Contact int(10),Email varchar(30))";

mysqli_query($conn,$sql);

echo "table created";

mysqli_close($conn);

?>