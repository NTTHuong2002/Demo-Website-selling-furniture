<?php  
	include("menu.php");
	$conn=mysqli_connect("localhost","root","","noithat");
	$sql="SELECT * FROM tintuc WHERE id=".$_GET['idtin'];
	$ketqua=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($ketqua);
	$luongtruycap=$row['luongtruycap']+1;
	$sql1="UPDATE tintuc set luongtruycap=".$luongtruycap." WHERE id=".$_GET['idtin'];
	$ketqua1=mysqli_query($conn,$sql1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chi tiết tin tức</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 


</head>
<body>
	<?php 
		$conn=mysqli_connect("localhost","root","","noithat");
		$ketqua_tintuc=mysqli_query($conn,"SELECT * FROM tintuc WHERE id= ".$_GET['idtin']);	
		while($row_tintuc=mysqli_fetch_assoc($ketqua_tintuc)){
	?>
		<div class="container-fluid mb-5 " style="background: #FFF ;">
			<div class="container"   >
				<div class="row " >
					<div class="col-12 mt-3">
						<h3><?php echo $row_tintuc['tieude']; ?></h3>
					</div>
					
					<div class="col-12 row mt-3 border-top">
						<div class="col-12 mt-3">
							<img src="img/<?php echo $row_tintuc['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0">
						
						</div>
						<div class="col-12 mt-3" style="font-size: 15px">
							<p><?php echo $row_tintuc['noidung']; ?></p>
						</div>
						
						
					</div>
					
					<?php } ?>	

				</div>
			</div>
		</div>
		
		<?php  include("lienhe.php");?>
</body>
</html>