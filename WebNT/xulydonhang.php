<?php  
	session_start();
	$connect=mysqli_connect("localhost","root","","noithat");
	$date = getdate();
	$ngay=''.$date['year'].'-'.$date['mon'].'-'.$date['mday'].'';
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$sql="INSERT INTO donhang(idkhachhang,ngay,tenuser,diachi,sodt,email,loinhan,tongsanpham,tongtien,trangthai) values(".$_SESSION['id'].",'".$ngay."','".$_POST['tendaydu']."','".$_POST['diachi']."','".$_POST['sodt']."','".$_POST['email']."','".$_POST['loinhan']."','".$_POST['tongsanpham']."','".$_POST['tongtien']."',1)";
	$query=mysqli_query($connect,$sql);
	// $sql_idcuoi="select MAX(id) as iddh from donhang ";
	// $query_idcuoi=mysqli_query($connect,$sql_idcuoi);
	// $row_idcuoi=mysqli_fetch_assoc($query_idcuoi);
	$row_idcuoi=mysqli_insert_id($connect);
	echo $row_idcuoi;
	$str=$_POST['idsp'];
	$sql1="select * from hanghoa where id in ($str)";
	$query1=mysqli_query($connect,$sql1);
	$_SESSION['dem']=0;
	 while($row1=mysqli_fetch_assoc($query1)){
	 	if(isset($_SESSION['cart'][$row1['id']][$_SESSION['ten']])){
	 		$sql2="INSERT INTO chitietdh(iddh,idsp,soluong,dongia) values(".$row_idcuoi.",".$row1['id'].",".($_SESSION['cart'][$row1['id']][$_SESSION['ten']]).",".($_SESSION['cart'][$row1['id']][$_SESSION['ten']])."*".$row1['dongia'].")";
			$query2=mysqli_query($connect,$sql2);
			$sl=$row1['soluong']-$_SESSION['cart'][$row1['id']][$_SESSION['ten']];
			$sql3 = "UPDATE hanghoa SET soluong=$sl WHERE id=".$row1['id'];
		$query3=mysqli_query($connect,$sql3);	
		unset($_SESSION['cart'][$row1['id']][$_SESSION['ten']]);
		}
	}
	header("location: hoadon.php?id=".$row_idcuoi."");
	}
?>