<?php 
include "conn.php";
session_start();
$pssw=$_POST["passw"];
$user=$_POST["username"];

$query="SELECT * FROM users WHERE email like '$user' AND password like '$pssw' ;";
$result=$conn->query($query);
$row = $result->fetch();
if(!empty($row)){
	$_SESSION["user"]=$row["id"];
	echo "logged in";
}
else header("location:login.html");

 ?>