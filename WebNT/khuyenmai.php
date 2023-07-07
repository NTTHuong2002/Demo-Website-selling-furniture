<!DOCTYPE html>
<html>
<head>
	<title>Chương trình khuyến mãi</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	
	<?php 
	 include("menu.php"); 
	?>

		<div class="container-fluid mb-5 " style="background: #FFF ;">
			<div class="container"   >
				<div class="row " >
					<div class="col-12 mt-3">
						<h3>Chương trình khuyến mãi</h3>
					</div>
				
					
					<?php 
							$conn=mysqli_connect("localhost","root","","noithat");
							$ketqua_khuyenmai=mysqli_query($conn,"SELECT * FROM khuyenmai ");	
							while($row_khuyenmai=mysqli_fetch_assoc($ketqua_khuyenmai)){
					 ?>
					<div class="col-12 row mt-3 border-top">
						<div class="col-5 mt-3">
							<img src="img/<?php echo $row_khuyenmai['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0">
							
						</div>
						<div class="col-7 mt-3" style="font-size: 15px">
							<h4><?php echo $row_khuyenmai['tieude']; ?></h4>
							<p><?php echo $row_khuyenmai['noidung']; ?></p>
						</div>
						
						
					</div>
					
					<?php } ?>	

				</div>
			</div>
		</div>
		
		<?php  include("lienhe.php");?>
</body>
</html>