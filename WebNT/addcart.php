<?php
	session_start();
	$id=$_GET['item'];
	if (isset($_GET['sl'])) {
		$sl=$_GET['sl'];
	}

	$tendn=$_SESSION['ten'];
	if (isset($_SESSION['ten'])) {
		if(isset($_SESSION['cart'][$id][$tendn])){
			if (isset($_GET['sl'])) {
				$qty = $_SESSION['cart'][$id][$tendn] + $sl;
			}
			else $qty = $_SESSION['cart'][$id][$tendn] + 1;
		}
		else{
			if (isset($_GET['sl'])) {
				$qty=$sl;
			}
			else $qty=1;
			$_SESSION['dem']++;
		}
			$_SESSION['cart'][$id][$tendn]=$qty;
		}
	
	header("location: cart.php");
	
?>

