<?php
include("conn.php");
//session_start();
//to specify sql statement i.e. insert, update, delete, search
$sql = "Insert into Contact(name, mobile, reason, message ) values('$_POST[p_name]','+91$_POST[mobile]','$_POST[problem]','$_POST[msg]')";

//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//$_SESSION['SOS']="Thankyou for contacting us we will contact you soon !!!";
header("location:IDI_project.php#contactUs");

//echo $_POST["p_name"];

?>