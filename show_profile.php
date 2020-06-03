
<?php
include("conn.php");
$ID=$_GET['id'];
$sql = "select * from Register where id='$ID'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($sql));
$row = mysqli_fetch_array($result);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> UPDATE STUDENT</title>
<?php session_start();include('head.php');
//include('check_login.php');
error_reporting(0); ?>
<style>
.form-control{
	border:1px solid red;
}

form{
	font-family:Lucida Fax;
	font-size:18px;
	text-transform: uppercase;
	font-weight:bold;
}
input[type='radio']{
	height:13px;
	width:13px;
}
</style>
</head>
<body >
<?php include "admin_header.php";?>

<center>
<font size="5" face="SAN Comic MS" color="RED"><b>
<?php echo $_SESSION['MSG_UPDATE'];?></b>
</font></br>

<form action="update.php" method="POST">
	<center><input name="id" type="number" hidden class="form-control" value="<?PHP echo $row[0]?>"></br>
          </center>
          <center><input style="width: 500px; text-align: center;"name="name" required type="text" class="form-control" placeholder="Name" value="<?PHP echo $row[1]?>"></br>
          </center>
<center><input  style="width: 500px; text-align: center;"name="email"  required type='email'  class="form-control" placeholder='E-mail' value="<?PHP echo $row[2]?>"></center>
<br>
<center><input  style="width: 500px; text-align: center;"name="no" required type="tel" class="form-control" placeholder="Mobile Number" maxlength="10"value="<?PHP echo $row[3]?>"></center>
<br>
<center><input  style="width: 500px; text-align: center;"name="add" required type="text" class="form-control" placeholder="Address"value="<?PHP echo $row[4]?>"></center>
<br> 
<center><input  style="width: 500px; text-align: center;"name="school" required type="text" class="form-control" placeholder="School"value="<?PHP echo $row[5]?>"></center>
<br>   
<center><input  style="width: 500px; text-align: center;"name="course" required type="text" class="form-control" placeholder="Course"value="<?PHP echo $row[6]?>"></center> 
<br>
 <input type="submit" name="Update" class="btn btn-info"></form>
</center>


<?php $_SESSION['MSG_UPDATE']=""?>
</body>
</html>
