<?php
$servername="localhost";
$uname="root";
$pass="";
$dbname="CSEB2020";
$conn=mysqli_connect($servername,$uname,$pass,$dbname);

if($conn){
	echo "Connection successful";

}
else{
	echo "Connection Failed";
}

?>