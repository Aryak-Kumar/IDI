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
  <title>IDI Abacus Lucknow</title>
    <?php include("head.php");?>
  <style>
    body {
    background: linear-gradient(to bottom, #0066ff 0%, #01DFA5 100%);
}
    <?php include("style.css");?>
  </style>
</head>
<body>
    <?php include("header.php");?>
</br>


<div class="icon-bar">
  <a href="https://www.facebook.com/idiabacus.classes" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://plus.google.com/u/0/110740299364599651077/" class="google"><i class="fa fa-google"></i></a> 
  <a href="https://www.linkedin.com/company/intellect-development-inc.-india" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/channel/UC3TZ60Wc54crdxK_sfoeXVQ" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>



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





<!--<............................................................................................................................>-->



<!--<Login Modal>-->
<span class="row">
<a class="col-md-5" href="#"><img style='border-radius: 20px' src="idi_logo.png" class='mx-auto d-block' height= "100px"></img></a>
<div class="col-md-2"><br></div>
<a class="col-md-5" href="#"><img src="nabet_logo.png" class='mx-auto d-block' height= "100px"></img></a>
</span>
<br>
<br> 
<br>
<br>
<br>
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
<!--<............................................................................................................................>-->


<!--<Desktop Home>-->
  <div id="home">
<div id="home"class='container d-none d-lg-block'style="background-image: url(abacus2.jpeg); background-repeat: no-repeat;background-size: 100% 700px; background-position: center;border-radius: 50px;"  >
  <div ><h1 align="center" class="Display-1"><b><font style="font-family: Arial Rounded MT Bold;"><span style="color: #4b68e6;">IDI</span> <span style="color: #f73861;">EDUCATION</span><br></font></b></h1>
<br>
<div style=" font-size:20px ;text-align: justify; color: white;"class=" container  text-normal"><p>Intellect Development Incorporation (IDI) provides various brain whetting programs for the young ones to enravel and enrich various qualities, so as to elevate them to their maximum potential. <strong><a href="http://nabet.qci.org.in">NABET</a></strong> has provided Intellect Development Inc. India with accreditation for providing Abacus Education to the children of our nation, thereby ”Nurturing the Future”. Our courses are certified and promise to be quite lucrative in the contemporary world. IDI brings to you the modern ways of brain sharpening, all the while making use of best the traditional methods have to offer, we keep in front of you a combo of intellect development and interactive immersive learning in order to help you to grasp the future.We take pride in ourselves and the services we provide to you. Our focus, our motto, our aspiration, our main objective is overall development. There are various ways one can cultivate the most out of oneself and at IDI we provide a kick-start to your brain’s engines to enable you to grow, expand your limits and move towards the apex of mental qualities.</p>
  <br>
<br>
<br>
<?php// session_start();
?>
    <?PHP include("form_2.php");
?>
  <button type="button" style='height: 100px; width: 200px 'class='btn btn-warning mx-auto d-block' data-toggle="modal" data-target="#myModal2" ><font style="font-size: 30px; ">Register</font></button>
<br></div>
</div>
</div>



<!--<............................................................................................................................>-->

<!--<Mobile Home>-->
<div id="home"class='container d-lg-none'style="background-image: url(abacus2.jpeg); background-repeat: no-repeat;background-size: auto 100%; background-position: center;border-radius: 50px;"  >
  <div align="center"><b><font style="font-family: Arial Rounded MT Bold; font-size: 50px"><span style="color: #4b68e6;">IDI</span> <span style="color: #f73861;">EDUCATION</span><br></font></b>
<br>
<br>
<br>
<div style=" font-size:15px ;text-align: justify; color: white;"class=" container  text-normal"><p>Intellect Development Incorporation (IDI) provides various brain whetting programs for the young ones to enravel and enrich various qualities, so as to elevate them to their maximum potential. <strong><a href="http://nabet.qci.org.in">NABET</a></strong> has provided Intellect Development Inc. India with accreditation for providing Abacus Education to the children of our nation, thereby ”Nurturing the Future”. Our courses are certified and promise to be quite lucrative in the contemporary world. IDI brings to you the modern ways of brain sharpening, all the while making use of best the traditional methods have to offer, we keep in front of you a combo of intellect development and interactive immersive learning in order to help you to grasp the future.We take pride in ourselves and the services we provide to you. Our focus, our motto, our aspiration, our main objective is overall development. There are various ways one can cultivate the most out of oneself and at IDI we provide a kick-start to your brain’s engines to enable you to grow, expand your limits and move towards the apex of mental qualities.</p>
  <br>
<br>
<br>
</div>
<!--<............................................................................................................................>-->

<!--<Mobile Rigister Modal>-->
    <?PHP include("form_3.php");
?>
  <button type="button" style='height: 50px; width: 100px 'class='btn btn-warning mx-auto d-block' data-toggle="modal" data-target="#myModal3" ><font style="font-size: 15px; ">Register</font></button>
<br></div>
</div>
</div>
<br></div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>

<!--<............................................................................................................................>-->

<!--<Desktop Gallery>-->
  <div id="gall">
<div id="gall" class='container d-none d-lg-block'  style="background-color: #2E64FE;border-radius: 20px" >
  <div ><h1 align="center" class="Display-1"><b><font style="font-family: Arial Rounded MT Bold;"><span style="color:#F78181;">Gallery</span>
  </font></b></h1>
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
   
  <!-- The slideshow -->
  <div class="carousel-inner" align="center">
   <div class='carousel-item active'>
      <a href='Photo_Show_db.php'><img src='Image/child.jpg' alt='' width='80%' height='400px'></a>
    </div>
  
<?PHP
include("conn.php");
  $sql = "select * from img order by time desc limit 5";
//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

while($row = mysqli_fetch_array($result))
{
  
  echo "<div class='carousel-item'>
      <a href='Photo_Show_db.php'><img src='Image/".$row[1]."' alt='".$row[2]."' width='80%' height='400px'></a>
    </div>";
  
}
?>

</div>



  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<br>
</div>
</div>

<!--<............................................................................................................................>-->




<!--<Mobile Gallery>-->
<div id="gall" class='container d-lg-none'  style="background-color: #2E64FE;border-radius: 20px" >
  <div ><h1 align="center" class="Display-1"><b><font style="font-family: Arial Rounded MT Bold; font-size: 50px;"><span style="color: #F78181;">Gallery</span>
  </font></b></h1>
  <div id="demo2" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo2" data-slide-to="0" class="active"></li>
    <li data-target="#demo2" data-slide-to="1"></li>
    <li data-target="#demo2" data-slide-to="2"></li>
    <li data-target="#demo2" data-slide-to="3"></li>
    <li data-target="#demo2" data-slide-to="4"></li>
  </ul>
   
  <!-- The slideshow -->
  <div class="carousel-inner" align="center">
   <div class='carousel-item active'>
      <a href='Photo_Show_db.php'><img src='Image/child.jpg' alt='' width='80%' height='400px'></a>
    </div>
  
<?PHP
include("conn.php");
  $sql = "select * from img order by time desc limit 5";
//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

while($row = mysqli_fetch_array($result))
{
  
  echo "<div class='carousel-item'>
      <a href='Photo_Show_db.php'><img src='Image/".$row[1]."' alt='".$row[2]."' width='80%' height='400px'></a>
    </div>";
  
}
?>

</div>



  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>
<br>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>
<!--<............................................................................................................................>-->



<!--<Desktop About Us>-->
  <div id="aboutus">
<div id="aboutus"class='container d-none d-lg-block' style="background-image: url(chil2.jpg);background-repeat: no-repeat;background-size: auto 100% ;border-radius: 50px;">
  <div ><h1 align="center" class="Display-1"><b><font style="font-family: Arial Rounded MT Bold;"><span style="color: #87c92b;">About Us</span>
  </font></b></h1>
  <br><br>
  <center><img src="info.jpg" height="auto" width="500px"></center>
</div>


<div class="row container">
<div class="Abacus-Education col-md-5 center">
<p class="text-sys"><span style="color: #4b68e6;font-family: Arial Rounded MT Bold;font-size: 30px">Abacus</span><br>
<span style="color: #0ec7a7;font-family: Arial Rounded MT Bold;font-size: 30px">Education</span></p>
<p class="text-normal" style="text-align: justify; ">An abacus is a manual aid to calculating that consists of beads or disks that can be moved up and down on a series of sticks or strings within a usually wooden frame. The abacus itself doesn’t calculate; it’s simply a device for helping a human being to calculate by remembering what has been counted.</p>
<a href="http://www.idiindiaedu.com/abacus/"><button class="rvp-button">Read more</button></a>
</div>
<div class="Finger-Calculation col-md-2">
  </div>
<div class="Finger-Calculation col-md-5">
<p class="text-sys"><span style="color: #f73861;font-family: Arial Rounded MT Bold;font-size: 30px">Finger</span><br>
<span style="color: #fec200;font-family: Arial Rounded MT Bold;font-size: 30px; ">Calculation</span></p>
<p class="text-normal" style="text-align: justify; color:  " >Finger calculation is a faster, efficient and very interesting way of performing calculation through your fingers. It is an effective method to adopt for counting numbers on your finger tips. It gives us instant result to develop listening skills, concentration, retaining power, confidence level and other qualities like speed and accuracy as in finger calculation no visualization is essential.</p>
<a href="http://www.idiindiaedu.com/finger-calculation/"><button class="rvp-button">Read more</button></a>
</div>
</div>


<br>
<br>






<div class="row container">
<div class="Abacus-Education col-md-5 center">
<p class="text-sys"><span style="color: #f73861;font-family: Arial Rounded MT Bold;font-size: 30px">Vedic Math</span></p>
<p class="text-normal" style="text-align: justify;">Vedic Mathematics is a blessing to everybody in this fastest growing world and age when people’s numerical skills are deteriorating as the use of calculators is increasing commencing at the younger age. Vedic mathematics shorter, quicker and easy to remember techniques enables to do calculations faster than they would with conventional methods.</p>
<a class="button-link" href="http://www.idiindiaedu.com/vedic-maths/"><button class="rvp-button">Read more</button></a>
<br><br><br></div>
<div class="Finger-Calculation col-md-2">
  </div>
<div class="Finger-Calculation col-md-5">
<p class="text-sys"><span style="color: #919191;font-family: Arial Rounded MT Bold;font-size: 30px">Calligraphy</span></p>
<p class="text-normal" style="text-align: justify;color: white">The word ‘Calligraphy’ means beautiful way of writing. Calligraphy is the art to make elegant handwriting. Before the invention of printing press, this was the way to make each page of books. Each copy of books was handwritten. A flat-edged pen was used to write.</p>
<a class="button-link" href="http://www.idiindiaedu.com/learn-calligraphy/"><button class="rvp-button">Read more</button></a>
</div>
</div>
</div>

<!--<............................................................................................................................>-->


<!--<Mobile About Us>-->





<div id="aboutus"class='container d-lg-none' style="background-image: url(chil2.jpg);background-repeat: no-repeat;background-size: auto 100%;border-radius: 50px;">
  <div ><h1 align="center" class="Display-1"><b><font style="font-family: Arial Rounded MT Bold; font-size: 50px;"><span style="color: #87c92b;">About Us</span>
  </font></b></h1>
  <br><br>
  <center><img src="info.jpg" height="auto" width="500px"></center>
</div>


<div class="row container">
<div class="Abacus-Education col-md-5 center">
<p class="text-sys"><span style="color: #4b68e6;font-family: Arial Rounded MT Bold;font-size: 30px">Abacus</span><br>
<span style="color: #0ec7a7;font-family: Arial Rounded MT Bold;font-size: 30px">Education</span></p>
<p class="text-normal" style="text-align: justify; ">An abacus is a manual aid to calculating that consists of beads or disks that can be moved up and down on a series of sticks or strings within a usually wooden frame. The abacus itself doesn’t calculate; it’s simply a device for helping a human being to calculate by remembering what has been counted.</p>
<a href="http://www.idiindiaedu.com/abacus/"><button class="rvp-button">Read more</button></a>
</div>
<div class="Finger-Calculation col-md-2">
  </div>
<div class="Finger-Calculation col-md-5">
<p class="text-sys"><span style="color: #f73861;font-family: Arial Rounded MT Bold;font-size: 30px">Finger</span><br>
<span style="color: #fec200;font-family: Arial Rounded MT Bold;font-size: 30px; ">Calculation</span></p>
<p class="text-normal" style="text-align: justify; color:  " >Finger calculation is a faster, efficient and very interesting way of performing calculation through your fingers. It is an effective method to adopt for counting numbers on your finger tips. It gives us instant result to develop listening skills, concentration, retaining power, confidence level and other qualities like speed and accuracy as in finger calculation no visualization is essential.</p>
<a href="http://www.idiindiaedu.com/finger-calculation/"><button class="rvp-button">Read more</button></a>
</div>
</div>




<div class="row container">
<div class="Abacus-Education col-md-5 center">
<p class="text-sys"><span style="color: #f73861;font-family: Arial Rounded MT Bold;font-size: 30px">Vedic Math</span></p>
<p class="text-normal" style="text-align: justify;">Vedic Mathematics is a blessing to everybody in this fastest growing world and age when people’s numerical skills are deteriorating as the use of calculators is increasing commencing at the younger age. Vedic mathematics shorter, quicker and easy to remember techniques enables to do calculations faster than they would with conventional methods.</p>
<a class="button-link" href="http://www.idiindiaedu.com/vedic-maths/"><button class="rvp-button">Read more</button></a>
</div>
<div class="Finger-Calculation col-md-2">
  </div>
<div class="Finger-Calculation col-md-5">
<p class="text-sys"><span style="color: #919191;font-family: Arial Rounded MT Bold;font-size: 30px">Calligraphy</span></p>
<p class="text-normal" style="text-align: justify;">The word ‘Calligraphy’ means beautiful way of writing. Calligraphy is the art to make elegant handwriting. Before the invention of printing press, this was the way to make each page of books. Each copy of books was handwritten. A flat-edged pen was used to write.</p>
<a class="button-link" href="http://www.idiindiaedu.com/learn-calligraphy/"><button class="rvp-button">Read more</button></a><br></div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>


</div>

<!--<............................................................................................................................>-->






<div id="contact">
<?PHP include("form_test.php");
?></div>


</body>

</html>
