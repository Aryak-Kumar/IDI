

<!--<Login Modal>-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login_script.php" method="POST">
<center><input  type='text' Required placeholder='Username' name="username"></center>
<br>
<center><input type='password' Required placeholder='password'name="password"></center>
<br><center><input type="checkbox" onclick="myFunction()">  Show Password</center>
<br>
<center><a href="#">Forgot Password</a></center>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="login"></div></form>
      </div>

    </div>
  </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>






<?PHP error_reporting(0);
?>
<html>
<style>
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
  border-radius: 100px
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #007bb5;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<head>
	<title>Activities</title>
			    <?php

			include('head.php');
			include("conn.php");
      include("header.php");
echo"<br>";
echo"<br>";
echo"<div class='container' style='padding:50px; align:center; width:1000px; background-image:url(abacuswall.jpeg);background-repeat: no-repeat; width:100%; color: red; background-position:center'>";
			echo"<font style='font-size:100px; color:#01DFA5 '>Activity Sheets </font>";
      $sql = "select * from file";
			//to execute the sql query
			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		echo"<ul>";
			while($row = mysqli_fetch_array($result))
			{ 

				echo "<li><a href='File/".$row[1]."'><font style='color:#fff; font-size:50px;'>".$row[2]."</font></a></li>";
				
				
				
			}
echo"</ul>";
echo"</div>"
			?>
  <style>

  	body {
    background: linear-gradient(to bottom, #0066ff 0%, #01DFA5 100%);
}
  	<?php include("style.css");?>
  </style>
</head>
</body>

</br>
</br></br></br></br></br></br>
<center><a href="Question.php"><input type='button' name='quiz' value='Quiz'style="height: 100px; width: 200px; font-size: 50px" class='rvp-button'></a></center>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</html>


