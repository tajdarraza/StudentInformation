<?php  

$dbname="sis";
$conn =mysqli_connect("localhost","root","") or die ("could not connect to Database");
mysqli_select_db($conn,$dbname);
?>