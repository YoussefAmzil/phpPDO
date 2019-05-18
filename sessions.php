<?php 
session_start();
if(!isset($_SESSION['panier'])){
	$pan= array();
	$_SESSION['panier']=$pan;
}
 ?>