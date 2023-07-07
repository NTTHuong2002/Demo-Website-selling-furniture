<!DOCTYPE html>
<html>
<head>
	<title>Tin tức</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
<style type="text/css" media="screen">

body{
	font-size: 17px;
	font-family: serif;
}
.img-container{ 
	
	height: auto; /** Chiều cao tự động **/ 
	 /** Cách trên dưới 10px và nằm giữa **/ 
	overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/ 
	position: relative;  /** Chiều rộng vùng chứa **/ } 
	
.img-container img { 
	 /** Hình ảnh rộng 100% so với vùng chứa **/ 
	transition: all 1s; /** Tạo độ mượt **/ } 
	
.img-container:hover img { 
	-webkit-transform: scale(1.2); transform: scale(1.2); }
	.img-zoom:hover { 
	border: 1px solid red;
	-webkit-transform: scale(1.2); transform: scale(1.2); }
	@media screen and (max-width: 320px) {
 		body div,h1,h2,h3,h4,h5,h6,font {
 			font-size: 10px;
 			/*width: 1251px;*/
 		}
   
 	}
 	@media (min-width: 321px)  and (max-width: 640px) {
 		body div,h1,h2,h3,h4,h5,h6{
 			/*width: 1251px;*/
 			font-size: 13px;
 		}
   
 	}
 	@media (min-width: 641px) and (max-width: 960px) {
 		body div,h1,h2,h3,h4,h5,h6{
 		font-size: 15px;
 		}
   
 	}
 	article.sp{

 		border: 1px solid #DCC;
 	}
 	article.sp:hover{
 		
 		box-shadow: 0 0 10px;
 		
 	}
 	article.sp button{
 		visibility: hidden;
 	}
 	article.sp:hover button{
 	
 		visibility: visible;

 		
 	}
 </style>

</head>
<body>
	
	<?php 
	 include("menu.php"); 
	?>

		<div class="container-fluid mb-5 " style="background: #FFF ;">
			<div class="container"   >
				<div class="row " >
					<div class="col-sm-12 mt-3">
						<h3>Tin tức - Sự kiện</h3>
					</div>
					<div class="col-sm-9 ">
						<?php 
							$conn=mysqli_connect("localhost","root","","noithat");
							$sql="SELECT * FROM tintuc limit 0,1";
							$query=mysqli_query($conn,$sql);
							$row=mysqli_fetch_assoc($query);
						 ?>
						<div class="col-sm-12 row form-group">
							<div class="col-sm-6 " style="background: #F7F7F7 ;">
								<div class="col-sm-12">
									<a href="chitietTintuc.php?idtin=<?php echo $row['id']; ?>" title=""><img src="img/<?php echo $row['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0"></a>
								</div>
							</div>
							<div class="col-sm-6 " style="background: #F7F7F7 ;">
								<h3 class="mt-3"><?php echo $row['tieude']; ?></h3>
								<p class="mt-3"><?php echo $row['chuthich']; ?></p>
							</div>
						</div>
					
						<div class="col-sm-12 row   " style="margin-bottom: 30px;background: #F7F7F7 ;">
							<?php 
							$sql="SELECT * FROM tintuc limit 1,3";
							$query=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($query)){
						 ?>
							<div class="col-sm-4 " style="height: 100%;background: #FFF ;">
								<div class="col-sm-12">
									<a href="chitietTintuc.php?idtin=<?php echo $row['id']; ?>" title=""><img src="img/<?php echo $row['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0"></a>
									<h5 class="mt-3"><?php echo $row['tieude']; ?></h5>
								</div>
							</div>
						<?php } ?>	

						</div>
						<form action="tintuc.php" method="POST" accept-charset="utf-8">
								Số sản phẩm
								<select name="soluong" class=""  >
						<?php 
							$result=mysqli_query($conn,'select count(id) as total from tintuc where id > 4 ');
								$row_tong =mysqli_fetch_assoc($result);
								$total_records=$row_tong['total'];
								$current_page=isset($_GET['page'])?$_GET['page']:1;
								if (isset($_POST['soluong'])) {
									$limit=$_POST['soluong'];
									$_SESSION['soluong']=$limit;
								}
								else if (isset($_SESSION['soluong'])) {
									$limit=$_SESSION['soluong'];
								}
								else $limit=2;
								$total_page=ceil($total_records/$limit);
								if ($current_page>$total_page) {

									$current_page=$total_page;
								}
								else if ($current_page<1) {
									$current_page=1;	
								}
								$i=1;
								while ( $i<= $total_records) {
									if (isset($_SESSION['soluong'])) {
										if ($i==$_SESSION['soluong']) {
											echo'<option value="'.$i.'" selected="selected">'.$i.'</option>';
												
										}
										else echo'<option value="'.$i.'" >'.$i.'</option>';
										
									}else echo'<option value="'.$i.'" >'.$i.'</option>';
									$i=$i+1	;
								}
									if (isset($_SESSION['soluong'])) {
										if ($i==$_SESSION['soluong']) {
												 echo'<option value="'.$i.'" selected="selected">Tất cả</option>';
										}
										else echo'<option value="'.$i.'" >Tất cả</option>';
									}	else echo'<option value="'.$i.'" selected="selected">Tất cả</option>';	
								$start=4+($current_page-1)* $limit;
								?>
								</select>
								<input type="submit" name="" class="" value="Áp dụng" style="margin: 0 0 0 0">
								<?php
								$ketqua_tintuc=mysqli_query($conn,"SELECT * FROM tintuc  LIMIT $start,$limit");	
								while($row_tintuc=mysqli_fetch_assoc($ketqua_tintuc)){
						 ?>

						<div class="col-sm-12 row mt-3 border-top">
							<div class="col-sm-5 mt-3">
								<a href="chitietTintuc.php?idtin=<?php echo $row_tintuc['id']; ?>" title=""><img src="img/<?php echo $row_tintuc['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0"></a>
								
							</div>
							<div class="col-sm-7 mt-3" style="font-size: 15px">
								<h4><?php echo $row_tintuc['tieude']; ?></h4>
								<p class=""><span class="claimedRight" style="font-size: 1em"><?php echo $row_tintuc['chuthich']; ?> </span>...</p>
							</div>
							<script>
						      	$(document).ready(function(){
								  	$('.claimedRight').each(function (f) {
								      	var newstr = $(this).text().substring(0,200);
								      	$(this).text(newstr);

								    });
								})
							</script>
							
						</div>
						
						<?php } ?>	

						<div class="col-sm-12 row mt-2 " id="phanthem">
						</div>
						<div class="col-sm-12 mt-3" >
							<div class="row">
								
								<div class="col-sm-12 text-center" >
									<script>
										$(document).ready(function(){
											var start=1;
									      $("#them").click(function(){
									        $("#phanthem").append('');
										    });
										  });
									</script>
									<?php  
										if ($current_page>1&&$total_page>1) {
								 			echo '<a class="btn btn-primary" href="tintuc.php?page='.($current_page-1).'" title="">Prev</a> | ';
								 		}
								 		for ($i=1; $i <=$total_page ; $i++) { 
								 			if ($i==$current_page) {
								 				echo '<span class="btn btn-primary">'.$i.'</span> | ';
								 			}
								 			else {
								 				echo '<a class="btn btn-primary" href="tintuc.php?page='.$i.'" title="">'.$i.'</a> | ';
								 			}
								 		}
								 		if ($current_page<$total_page&& $total_page>1) {
								 			echo '<a class="btn btn-primary" href="tintuc.php?page='.($current_page+1).'" title="">Next</a>  ';
								 		}
									?>
								</div>
								
							</div>
							
						</div>
					</div>
					<div class="col-sm-3  ">
						<div class="col-sm-12 row">
							<div class="col-sm-12 text-center">
								<h4>Xu hướng 2020	</h4>
							<hr style="width: 10%;background: red;height: 1px" size="10"> 
							</div>
							<?php 
								$sql="SELECT * FROM tintuc ORDER BY id DESC";
								$query=mysqli_query($conn,$sql);
								$row=mysqli_fetch_assoc($query);
						 	?>
							<div class="col-sm-12">
								<a href="chitietTintuc.php?idtin=<?php echo $row['id']; ?>" title=""><img src="img/<?php echo $row['anh']; ?>" alt="" width="100%" height="100%" style="margin: 0 0 0 0"></a>
								
							</div>
							<div class="col-sm-12 border-bottom">
								<p><b><?php echo $row['tieude']; ?></b></p>
							</div>
							<?php 
								$conn=mysqli_connect("localhost","root","","noithat");
								$sql="SELECT * FROM tintuc ORDER BY id DESC limit 1,100 ";
								$query=mysqli_query($conn,$sql);

								while($row=mysqli_fetch_assoc($query)){
						 	?>
							<div class="col-sm-12 row mt-3">
								<div class="col-sm-7" style="font-size: 0.7em">
									<?php echo $row['tieude']; ?>
								</div>
								<div class="col-sm-5">
										<a href="chitietTintuc.php?idtin=<?php echo $row['id']; ?>" title=""><img src="img/<?php echo $row['anh']; ?>" class="  " alt="" width="150%" height="100%" style="margin-bottom: 30px;"></a>
								</div>
							</div>
							
							<div class="col-sm-12 border-bottom mt-3">
							</div>
							<?php } ?>
						</div>
						
					</div>
					
					
				</div>
			</div>
		</div>
		
		<?php  include("lienhe.php");?>
</body>
</html>