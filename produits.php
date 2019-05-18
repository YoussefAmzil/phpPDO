<?php 
include "conn.php";

 

 if(isset($_GET["type"])){
 	$type=$_GET["type"];
 }

if(!empty($type)){
$query="SELECT * FROM produits WHERE type LIKE '$type' ;";
}else{
$query="SELECT * FROM produits ;";	
}

$result=$conn->query($query);
$produits = $result->fetchAll();

 ?>