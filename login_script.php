<?php
session_start();
include("conn.php");
$sql = "select * from login where username='$_POST[username]' and password='$_POST[password]'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
$row = mysqli_num_rows($result);
if($row >0)
{
$row = mysqli_fetch_array($result);
$_SESSION['uname']=$row[0];
header("location:allstudents.php");
}
else
echo "<script>window.alert('Invalid username/password!');</script>";
echo "<script>history.back();</script>";
?>
