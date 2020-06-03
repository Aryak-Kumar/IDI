<?php
include("conn.php");
$ID=$_GET['id'];

$sql  = "delete from  Contact  where id='$ID' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
header('Location:allcontacts.php');
?>
