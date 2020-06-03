<?php
if(!isset($_SESSION["uname"])){
	header("location:../index.php");
}
//Add the below code to check login 
include('check_login.php');
?>