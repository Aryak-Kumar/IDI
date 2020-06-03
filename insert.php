<?php
include("conn.php");
 
$name = $_POST['name'];
 $bal = $_POST['bal']; 
 $ID = $_POST['ID'];
 $age = $_POST['age']; 
 $mob = ('+91'.$_POST['num']);
 $gen = $_POST['gen'];
 $pro = $_POST['pro'];
 $medi = $_POST['medi'];
 
 
 
 $sql= "INSERT INTO patient (name,mobile,age,medi,pro,gen,bal) VALUES ('$name','$mob','$age','$medi','$pro','$gen','$bal')";
 
 
 $data = mysqli_query ($conn,$sql)or die(mysqli_error($conn)); 
 if($data) {header('location:New_patient.php'); }
 
 session_start();
 $_SESSION['MSG']="New Patient Added Into Database !!!";
 
 
 ?>