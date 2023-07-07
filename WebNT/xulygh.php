<?php
session_start(); 
$item=$_GET['item'];
if (isset($_POST['sl'])) {
	$sl=$_POST['sl'];
}
else $sl=1;
if (isset($_SESSION['ten'])) {
	header("location: addcart.php?item=".$item."&sl=".$sl."");

}
else {header("location: dangnhap.php");}

 ?>