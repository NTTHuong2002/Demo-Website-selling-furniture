<?php 
	 include("menu.php"); 
	?>
		
<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<style type="text/css" media="screen">

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
<body style="background: #F5F5F5 ;">
	
	
		<div class="container-fluid " >
			<div class="container">
				<div class="row" style="background: #FFF;">
					<div class="col-12"style="background: #F5F5F5 ;">
						<hr>
					</div>
					<div class="col-12 " style="background: #F5F5F5 ;">
						<span style="font-size: 20px">QTT Shop | Tìm kiếm</span>
						
					</div>
					<div class="col-12 "style="background: #F5F5F5 ;">
						<h3>Kết quả tìm kiếm cho từ khóa "<?php echo $_GET['noidungtim']; ?>"</h3>
					</div>
					<div class="col-12"style="background: #F5F5F5 ;">
						<hr>
					</div>
					<div class="col-2">
						<h5 class="mt-3  ">Bộ lọc tìm kiếm</h5>
						<hr>
					</div>
					<div class="col-10 text-right">
						<span style="display: inline-block;">
							<form action="timkiem.php?noidungtim=<?php echo $_GET['noidungtim']; ?>" method="POST" >
								Số sản phẩm
								<select name="soluong" class=""  >
									<?php 
										$result=mysqli_query($conn,'select count(id) as total from hanghoa where tenhang like "%'.$_GET['noidungtim'].'%"');
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
										else $limit=9;
										$total_page=ceil($total_records/$limit);
										if ($current_page>$total_page) {

											$current_page=$total_page;
										}
										else if ($current_page<1) {
											$current_page=1;	
										}

										$i=3;
										while ( $i<= $total_records) {
											if (isset($_SESSION['soluong'])) {
												if ($i==$_SESSION['soluong']) {
													echo'<option value="'.$i.'" selected="selected">'.$i.'</option>';
														
												}
												else echo'<option value="'.$i.'" >'.$i.'</option>';
												
											}else echo'<option value="'.$i.'" >'.$i.'</option>';
											$i=$i+3	;
										}
											if (isset($_SESSION['soluong'])) {
												if ($i==$_SESSION['soluong']) {
														 echo'<option value="'.$i.'" selected="selected">Tất cả</option>';
												}
												else echo'<option value="'.$i.'" >Tất cả</option>';
											}	else echo'<option value="'.$i.'" selected="selected">Tất cả</option>';	
										$start=($current_page-1)* $limit;
									
									 ?>
									
								</select>
								<input type="submit" name="" class="btn btn-success" value="Áp dụng" style="margin: 0 0 0 0">
							</form>
							
						</span>
						HIỆN CÓ 468 SẢN PHẨM <a href="#" title=""><span class="fa fa-th border" style="padding: 10px"></span></a>
						<hr>
					</div>
					<div class="col-2">
						<div class="row text-center">
						
							<form action="timkiem.php" method="get" style="background: #FFF; " >
								<div class="col-xs-3" style="">
									<div class="col-xs-12 text-center" style="height: 100%">
										<p class="">Khoảng giá</p>
										<input type="number" name="gia" required value="" style="width: 40%" placeholder="">
											-
										<input type="number" name="gialh" required value="" style="width: 40%;" placeholder="">
										<input type="hidden" name="noidungtim" value="<?php echo $_GET['noidungtim']; ?>">
										<p ><input type="submit" value="Thực hiện" class="form-control btn btn-danger" style="margin-top: 10px"></p>
									</div>
								</div>
							</form>
						</div>	
					</div>
					<div class="col-10 ">
						<div class="row" >
							<?php  
							
								if (isset($_GET['gia'])&&isset($_GET['gialh'])) {
									$tktg=1;
									$gia=$_GET['gia'];
									$gialh=$_GET['gialh'];
									$result=mysqli_query($conn,"SELECT count(id) as total FROM hanghoa Where tenhang like '%".$_GET['noidungtim']."%' and dongia BETWEEN ".$gia." and ".$gialh."  ");
									$row_tong1 =mysqli_fetch_assoc($result);
									$total_records1=$row_tong1['total'];
									$total_page1=ceil($total_records1/$limit);
									$start=($current_page-1)* $limit;
									$ketqua_hanghoa=mysqli_query($conn,"SELECT * FROM hanghoa Where tenhang like '%".$_GET['noidungtim']."%' and dongia BETWEEN ".$gia." and ".$gialh." LIMIT ".$start.",".$limit."");
								}

								else {
									$sql_tim='SELECT * FROM hanghoa WHERE tenhang like "%'.$_GET['noidungtim'].'%"';
									$ketqua_tim=mysqli_query($conn,$sql_tim);
									$sql_timPTrang='SELECT * FROM hanghoa WHERE tenhang like "%'.$_GET['noidungtim'].'%"  LIMIT '.$start.','.$limit.'';
									$ketqua_hanghoa=mysqli_query($conn,$sql_timPTrang);
									}


									if (mysqli_num_rows($ketqua_tim)==0) {
								 		?><div class="col-12 text-center">
								 				<h4 >Không tìm thấy sản phẩm nào </h4>
								 			</div>
								 		<?php
										  
									}else{
									while($row_hanghoa=mysqli_fetch_assoc($ketqua_hanghoa)){
									
							?>
							<div class="col-4 form-group" >
								<article class="sp" style="width: 100%;height: 100%">
									<a class="link" href="chitietsp.php?idhang=<?php echo $row_hanghoa['id']; ?>" title="">
										<article class=" img-container" >
											<img src="img/<?php echo $row_hanghoa['anh'] ?>" width="100%" alt="" height="100%" style="">
										</article>
										<div class="col-12" align="center">
											<?php echo $row_hanghoa['tenhang'] ?><br>
											<!-- <img src="img/sao5.jpg"width="80%" class="im-responsive" alt="" height="100%" alt=""> -->
											<font color="red"><b><?php echo number_format($row_hanghoa['dongia']) ?> đ</b></font><br>
											
										</div>
									</a>
									<div class="col-12 text-center">
										<a href="xulygh.php?item=<?php echo $row_hanghoa['id']; ?>" title=""><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-shopping-cart"></span> </button></a>
	                    				<a href="" title=""><button type="button" class="btn btn-success btn-sm"><span class="fa fa-heart"></span> </button></a>	
									</div>
								</article>
								
								
							</div>
								<?php
								}
							}
							?>
							
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-3">
								
								</div>
								<div class="col-6 text-center" >
									<?php 
									if(isset($tktg)){
	 									$total_page=$total_page1;	
								 		if ($current_page>1&&$total_page>1) {
								 			echo '<a class="btn btn-primary" href="timkiem.php?page='.($current_page-1).'&gia='.$gia.'&gialh='.$gialh.'&noidungtim='.$_GET['noidungtim'].'" title="">Prev</a> | ';
								 		}
								 		for ($i=1; $i <=$total_page ; $i++) { 
								 			if ($i==$current_page) {
								 				echo '<span class="btn btn-primary">'.$i.'</span> | ';
								 			}
								 			else {
								 				echo '<a class="btn btn-primary" href="timkiem.php?page='.($current_page+1).'&gia='.$gia.'&gialh='.$gialh.'&noidungtim='.$_GET['noidungtim'].'" title="">'.$i.'</a> | ';
								 			}

								 		}
								 		if ($current_page<$total_page&& $total_page>1) {
								 			echo '<a class="btn btn-primary" href="timkiem.php?page='.($current_page+1).'&gia='.$gia.'&gialh='.$gialh.'&noidungtim='.$_GET['noidungtim'].'	" title="">Next</a>  ';
								 		}
								 	}
								 	else{
								 		if ($current_page>1&&$total_page>1) {
								 			echo '<a class="btn btn-primary" href="timkiem.php?page='.($current_page-1).'&noidungtim='.$_GET['noidungtim'].'" title="">Prev</a> | ';
								 		}
								 		for ($i=1; $i <=$total_page ; $i++) { 
								 			if ($i==$current_page) {
								 				echo '<span class="btn btn-primary">'.$i.'</span> | ';
								 			}
								 			else {
								 				echo '<a class="btn btn-primary" href="timkiem.php?page='.$i.'&noidungtim='.$_GET['noidungtim'].'" title="">'.$i.'</a> | ';
								 			}

								 		}
								 		if ($current_page<$total_page&& $total_page>1) {
								 			echo '<a class="btn btn-primary" href="timkiem.php?page='.($current_page+1).'&noidungtim='.$_GET['noidungtim'].'	" title="">Next</a>  ';
								 		}
								 	} 
								 	?>
								</div>
								<div class="col-3">
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<?php include("sanpham.php"); ?>
					</div>
				</div>
			</div>
		</div>
				
		<?php 
		include("lienhe.php");
		?>
</body>
</html>