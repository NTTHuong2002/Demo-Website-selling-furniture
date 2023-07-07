<?php
	session_start();
	$cart=$_SESSION['cart'];
	$id=$_GET['productid'];
	if($id == 0){
		unset($_SESSION['cart']);
		$_SESSION['dem']=0;
	}
	else{
		unset($_SESSION['cart'][$id][$_SESSION['ten']]);
		$_SESSION['dem']--;
		if ($_SESSION['dem']==0) {
			unset($_SESSION['cart']);
		}

	}
	 header("location:cart.php");
	exit();
?>