<?php
require 'myconfig.php';

$sql="Insert into users values(1,'Ujjwal',20,'9045230699','ujjwalshrivastav3@gmail.com')";
if(mysqli_query($conn, $sql)){
	echo "Inserted";
}
else{
	echo "Failed";
}

?>