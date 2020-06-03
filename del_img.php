<?php
include("conn.php");
$ID=$_GET['id'];

$sql  = "delete from  img  where id='$ID' ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
header('Location:File_upload.php');
?>



