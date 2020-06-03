<!DOCTYPE html>
<html>
<head><style>

input[type=button]{
height: 100px;
width:300px;
}   
</style>

<?PHP
include('head.php');
?>
</head>
<body>



<br><br><br>
<center><span id="demo" style="color:gold; font-size:100px;"></span></center>

</br>
</br>
</br>
</br>
<center><span id="input" ><button class="btn-3D"type="button" name="start" style="" onclick="question()" >START QUIZ</button></span></center><br>


<center><button type="button" class="btn-3D"name="next"  onclick='check()' >SUBMIT</button></center><br>
<center><button type="button" class="btn-3D"name="end" style="" onclick="end_ses()">END</button></center><br>


<script>
var x;//first number
var y;// second number
var z;//sum
var a;//check the input
var b;//number of questions
var c;// correct answers

b=0;
c=0;



function num1() {
  x = Math.floor((Math.random() * 10) + 1);
  document.getElementById("demo").innerHTML = x;
  }
  
  
  
function num2() {  
   y = Math.floor((Math.random() * 10) + 1);
  document.getElementById("demo").innerHTML = '+' + y;
  z=x+y;
  }
  
  
  
  function ans() {
 
  document.getElementById("input").innerHTML = "<input type='text' id='an' style= ' color:gold;text-align:center' class='btn-3D' placeholder='Enter Answer...'>";
}



function blank(){
	document.getElementById("demo").innerHTML = "";
}




function check(){
	b++;
	setTimeout('blank()',10);
	 a= document.getElementById("an").value;
	 if(a==z){
	 	window.alert("Correct Answer!");
	 	document.getElementById("input").innerHTML = "";
	 	c++;
	 }
	 else{
	 	window.alert("Wrong!");
	 	document.getElementById("input").innerHTML = "";
	 }
	 
	 setTimeout("question()",1000);
}






function question(){

setTimeout("num1()",10);

setTimeout("num2()",1000);

setTimeout("ans()",2000);
}






function end_ses() {

	document.write("<body style='font-size:80px;'><center><br>Total Questions:"+b+"<br>Correct Answers:"+c+"<br><br><br><a href='File_Show_db.php' style='text-decoration:none'>Back to Website</a></center></body>");
}







</script>

</body>
</html>