<?php
include("conn.php");
$ID=$_GET['id'];

$sql  = "delete from  Register  where id='$ID' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
header('Location:allstudents.php');
?>



