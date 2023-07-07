<!DOCTYPE html>
<html>
<head>
	<title>Thông tin cửa hàng</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	
	<?php 
	 	include("menu.php"); 
	 	$conn=mysqli_connect("localhost","root","","noithat");
			$sql="SELECT * FROM cuahang  ";
			$ketqua=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($ketqua);
	?>

		<div class="container-fluid mb-5 " style="background: #FFF ;">
			<div class="container">
				<div class="row ">
					<div class="col-12 mt-5">
						<h3>Giới thiệu về <?php echo $row['tenshop']; ?></h3>
					</div>
					<div class="col-6">
						<?php echo $row['gioithieu']; ?>
					</div>
					<div class="col-6">
						<img src="img/about.jpg" alt="" class="rounded-responsive" style="width: 100%">
					</div>
					<div class="col-12 mt-5">
						<h3>Giá trị và sự khác biệt</h3>
						<?php echo $row['giatri']; ?>
					</div>
					
					<div class="col-6">
						<h3>Tầm nhìn</h3>
						<?php echo $row['tamnhin']; ?>
					</div>
					<div class="col-6">
						<h3>Sứ mệnh</h3>
						<?php echo $row['sumenh']; ?>
					</div>
					
					<div class="col-6">
						<h4>Đóng góp ý kiến cá nhân ở đây :</h4>
						<textarea style="width: 100%" placeholder="Nhập ý kiến của bạn" class="form-control"></textarea>
						<input type="submit" class="btn btn-success" style="float: right" name="" value="Gửi">
					</div>
					<div class="col-6">
						<h4>Vị trí </h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1536.8929057803716!2d108.25008087087119!3d15.981034265799389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108ff0e96fcf%3A0xe138137f3cab3417!2zMjYgSHXhu7NuaCBWxINuIE5naOG7hywgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1607570125135!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		
		<?php  include("lienhe.php");?>
</body>
</html>