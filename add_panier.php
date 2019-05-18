<?php 
include "sessions.php";
$id=$_GET["id"];
$panier=array();
$panier=$_SESSION["panier"];
$panier[$id]=1;
$_SESSION["panier"]=$panier;

header("location:index.php");
 ?>