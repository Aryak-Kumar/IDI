<?php
session_start();//to start a session

$_SESSION['name']="Sushant";

echo $_SESSION['name'];
//session_unset();
echo "</br>";
echo (session_id());
echo "</br>";
//session_destroy();
echo "</br>";
define("Sus", "Welcome to CETPA !");
echo Sus;

?>


<a href="test_session.php"> Next Page </p>