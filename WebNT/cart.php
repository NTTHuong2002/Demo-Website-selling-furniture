<?php 
	 include("menu.php"); 
	?>	
<!DOCTYPE html>
<html>
<head>
	<title>GIỏ hàng</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body >
		<div class="container-fluid " style="background: #FFF;">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-4 mb-4">
						<span style="font-size: 20px">QTT Shop | Giỏ hàng</span>
						
					</div>
				</div>
			</div>
		</div>
				
		
		<div class="container-fluid mb-5 " style="background: #F5F5F5 ;">
			
			<div class="container"   >
				<div class="row " >
					<div class="col-12 mt-2 " style="background: #FFF">
						<table class="table table-borderless mt-3">
							<tr>
								<td width="50%">
									Sản phẩm
								</td>
								<td width="10%">
									Đơn giá
								</td >
								<td width="10%">
									Số lượng
								</td>
								<td width="10%">
									Giảm giá
								</td>
								<td width="10%">
									Số tiền
								</td>
								<td width="10%">
									Thao tác
								</td>
							</tr>
						</table>
					</div>
				<?php 
					if(isset($_POST['submit']))
					{
						
						foreach($_POST['qty'] as $key=>$value)
						{
							if( ($value == 0) and (is_numeric($value)))
							{
							unset ($_SESSION['cart'][$key][$_SESSION['ten']]);
							$_SESSION['dem']--;
							}
							else if(($value > 0) and (is_numeric($value)))
							{
							$_SESSION['cart'][$key][$_SESSION['ten']]=$value;
							}
						}
					}
				?>
			    <?php
				   $ok=1;
				if(isset($_SESSION['cart']))
				{
					foreach($_SESSION['cart'] as $k => $v){
						if(isset($k))
						{
						$ok=2;
						}
					}
				}
					if($ok == 2)
					{
						$total=0;
				foreach($_SESSION['cart'] as $key=>$value)
				{
				$item[]=$key;
				}
				$str=implode(",",$item);
				$connect=mysqli_connect("localhost","root","","noithat") or die("Can not connect
				database");
				$sql="select * from hanghoa where id in ($str)";
				$query=mysqli_query($connect,$sql);
				$_SESSION['dem']=0;
				 while($row=mysqli_fetch_array($query)){
					if(isset($_SESSION['cart'][$row['id']][$_SESSION['ten']])){
						$sql_khuyenmai="SELECT * FROM khuyenmai WHERE id=".$row['idkhuyenmai'];
						$query_khuyenmai=mysqli_query($connect,$sql_khuyenmai);
						$row_khuyenmai=mysqli_fetch_array($query_khuyenmai);
						$khuyenmai=100*$row_khuyenmai['giamgia'];
				?>

					<div class="col-12 mt-2 border" style="background: #FFF;">
						<form action='cart.php' method='post'>

						<table class="text-center" style="width: 100%">
							<tr>
								<td width="50%" align="left" >
									<a class="link" href="chitietsp.php?idhang=<?php echo $row['id']; ?>" title=""><img src="img/<?php echo $row['anh']; ?>" alt="" style="width: 50%">
									<?php echo $row['tenhang']; ?></a>
								</td>
								<td width="10%">
									<?php echo number_format($row['dongia']); ?>
								</td>
								<td width="10%">
									<input type="number" name="qty[<?php echo $row['id']; ?>]" style="width: 80%" value="<?php echo $_SESSION['cart'][$row['id']][$_SESSION['ten']]; ?>">
								</td>
								<td width="10%">
									<?php echo $khuyenmai; ?>%
								</td>
								
								<td width="10%">
									<?php 
									$total+=$_SESSION['cart'][$row['id']][$_SESSION['ten']]*$row['dongia']-$row['dongia']*$row_khuyenmai['giamgia'];
									 echo number_format($_SESSION['cart'][$row['id']][$_SESSION['ten']]*$row['dongia']-$row['dongia']*$row_khuyenmai['giamgia']); 
									?>
								</td>
								<td width="10%"> 
									<a href="delcart.php?productid=<?php echo $row['id']; ?>" title="">Xóa mặt hàng này</a>
								</td>
							</tr>
						</table>
						<div class="col-12 fixed-bottom" style="position: ;" >
							<div class="container ">
								<div class="row">
									<div class="col-12 "style="background: #FFF;box-shadow: 0px 8px 10px 5px; ">
										<p ><h5 align="right"><i>Chọn thao tác của bạn></i></h5></p>
										<hr>
										<span style="float: left">
											<a href="delcart.php" title=""><input type="button" class="btn btn-warning " value="Xóa tất cả" name=""></a>
												<input type="submit" class="btn btn-success " value="Cập nhật giỏ hàng"name="submit">
											
										</span>
										<span style="float: right" >Tổng tiền hàng(<?php echo $_SESSION['dem']+1; ?> sản phẩm):  <font color="red" style="font-size: 30px"><?php  echo number_format($total); ?> đ</font>
											<a href="chotdon.php?str=<?php echo $str; ?>&total=<?php echo $total; ?>"><input type="button" class="btn btn-danger btn-lg mb-3" value="Mua hàng"name=""></a>
										</span> 
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>
				<?php 
					$_SESSION['dem']++;
					}
				}
			}
			else {
				?>
				<div class="col-12 text-center" style="background: #FFF"> 
					<h5>Chưa có sản phẩm nào</h5>
				</div>
				<?php
			}
				?>
					<div class="col-12">
						<?php include("Sanpham.php"); ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
		include("lienhe.php");
		?>
</body>
</html>