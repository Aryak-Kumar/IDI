<?php
include("conn.php");
//session_start();
//to specify sql statement i.e. insert, update, delete, search
$sql = "INSERT INTO `Register` ( `name`, `email`, `mobile`, `add`, `school`, `course`) VALUES ('$_POST[name]', '$_POST[email]', '+91$_POST[no]', '$_POST[add]', '$_POST[school]', '$_POST[course]');";
//echo $_POST['name'];
//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//$_SESSION['SOS']="Thankyou for contacting us we will contact you soon !!!";
header("location:IDI_project.php#register");

//echo $_POST["p_name"];

?>