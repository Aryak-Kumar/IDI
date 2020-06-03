<?php
include("conn.php");
$ID=$_GET['id'];

$sql  = "delete from  file  where id='$ID' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
header('Location:File_upload2.php');
?>



