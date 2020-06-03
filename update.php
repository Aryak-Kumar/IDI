<?php
include("conn.php");
 session_start();
$name = $_POST['name'];
 $ID = $_POST['id'];
 $email = $_POST['email']; 
 $num = ($_POST['no']);
 $add = $_POST['add'];
 $school = $_POST['school'];
 $course = $_POST['course'];
 
 
 
 $sql= "UPDATE `Register` SET `id` = '$ID', `name` = '$name',`email` = '$email', `mobile` = '$num', `add` = '$add', `school` = '$school', `course` = '$course' WHERE `Register`.`id` = '$ID'";
 
 $data = mysqli_query ($conn,$sql)or die(mysqli_error($conn)); 
 if($data) {header("location:allstudents.php"); }
 $_SESSION['MSG_UPDATE']="STUDENT DATA UPDATED !";
 
 /*if ($conn->query($sql) === TRUE) {
 
 $_SESSION['MSG_UPDATE']="Patient UPDATED Into Database !!!";
} else {
    echo "Error updating record: " . $conn->error;
 $_SESSION['MSG_UPDATE']="PATIENT NOT UPDATED CONTACT SUSHANT !!!";
}
*/

 ?>