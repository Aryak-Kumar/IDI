<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('head.php');session_start();
include('check_login.php');
error_reporting(0);?>
<style>
table{
	
}
</style>
</head>
<body>
<?php include "admin_header.php";?>

</br>
  <center>
  
  
  <form class="form-inline mx-auto d-block">
  <input class="form-control" id="myInput" type="text" placeholder="Search Student Info" style="width:60%;border: 2px solid red;">
  </form>
  
  
  
  </center>
  <div class="table-responsive">

<?php
include("conn.php");
//to specify sql statement i.e. insert, update, delete, search

$sql = "select * from Register";
//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));


echo "<table width='90%' align='center' border='1' class='table table-hover'>";
echo "<th class='bg-info text-light'><center>Student ID</center>
<th  class='bg-info text-light'><center>Student Name</center>
<th  class='bg-info text-light'><center>Email</center>
<th  class='bg-info text-light'><center>Mobile</center>
<th  class='bg-info text-light'><center>Address</center>
<th  class='bg-info text-light'><center>School</center>
<th  class='bg-info text-light'><center>Course</center>
<th  class='bg-info text-light'><center>Delete</center>";

echo '<tbody id="myTable">';


while($row = mysqli_fetch_array($result))
{
	echo "<tr align='center'>";
	echo "<td><a href='show_profile.php?id=$row[0]'><button class='btn btn-success' >$row[0]</button></a></td>";
	echo "<td>$row[1] </td>";
	echo "<td>$row[2] </td>";
	echo "<td>$row[3] </td>";
	echo "<td>$row[4] </td>";
	echo "<td>$row[5] </td>";
	echo "<td>$row[6] </td>";
	echo "<td> <a href='del_students.php?id=$row[0]'><button class='btn btn-danger' >delete</button</a></td>";
	echo "</tr>";
	
}

?>
</tbody>
</table>

</div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
