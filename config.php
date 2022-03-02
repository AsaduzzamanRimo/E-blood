<?php
$server="localhost";
$dbname="blood_donor";
$dbuser="root";
$dbpass="";
$con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
if($con)
{
	echo ' ';
}
else
{
	echo 'not connected';
}
?>