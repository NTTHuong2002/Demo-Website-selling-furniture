<?php 
	 include("menu.php"); 
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Yêu thích</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/JNKKKK/MoreToggles.css@0.2.1/output/moretoggles.min.css">
<script src="js/danhgia.js"></script>


<script>
	function guiid(idsp){
			var idsp=idsp;
        	$.post("xulyyeuthich.php",{idsp: idsp}, function(ketqua){
        		 $("#ds"+idsp).css('display','none');
		});
	}
</script>
</head>
<body >
	
		<div class="container-fluid " style="background: #FFF;">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-4 mb-4">
						<span style="font-size: 20px;color: red">QTT Shop | Yêu thích</span>
						
					</div>
				</div>
			</div>
		</div>
				
		
		<div class="container-fluid mb-5 " style="background: #F5F5F5 ;">
			
			<div class="container"   >
				<div class="row " >
					<div class="col-12 mt-2 " style="background: #FFF">
						<table class="text-center table table-borderless mt-3">
							<tr>
								<td width="40%">
									Sản phẩm
								</td>
								<td width="15%">
									Đơn giá
								</td >
								<td width="15%">
									Ngày ra mắt
								</td>
								<td width="10%">
									Giảm giá
								</td>
								<td width="10%">
									Thay đổi
								</td>
							</tr>
						</table>
					</div>
					
					<?php  
						$conn=mysqli_connect("localhost","root","","noithat");
						$sql="SELECT * FROM yeuthich where iduser=".$_SESSION['id'];
						$ketqua=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($ketqua)){
							$sql_hanghoa="SELECT * FROM hanghoa where id=".$row['idsp'];
							$ketqua_hanghoa=mysqli_query($conn,$sql_hanghoa);
							while($row_hanghoa=mysqli_fetch_assoc($ketqua_hanghoa)){

					?>
					<div class="col-12 mt-2 border" style="background: #FFF;" id="ds<?php echo $row['idsp'] ?>">
						<table class="text-center " style="width: 100%">
							<tr>
								<td width="40%" >
									<img src="img/<?php echo $row_hanghoa['anh'] ?>" alt="" style="width: 50%">
									<?php echo $row_hanghoa['tenhang']; ?>
								</td>
								<td width="15%">
									<?php echo $row_hanghoa['dongia']; ?>
								</td>

								<td width="15%">
									 <?php echo $row['ngay']; ?>
								</td>
								<td width="10%">
									<?php 
										$sql_khuyenmai="SELECT * FROM khuyenmai WHERE id=".$row_hanghoa['idkhuyenmai'];
										$ketqua_khuyenmai=mysqli_query($conn,$sql_khuyenmai);
										$row_khuyenmai=mysqli_fetch_assoc($ketqua_khuyenmai);
										echo $row_khuyenmai['giamgia']*100,'%'; 

									?>
								</td>
								<td width="10%">
									<a href="" title=""  >
									<div class="mt-heart-golden"  style="font-size: 50%;"> 
										<?php 
										$sql1="SELECT * from yeuthich WHERE idsp=".$row['idsp']." and iduser=".$_SESSION['id']."";
									    $query1=mysqli_query($conn,$sql1);
									    $row1=mysqli_fetch_assoc($query1);
									    if (mysqli_num_rows($query1)<1) {
									     ?>
									     <input id="312" type="checkbox"onclick="guiid(<?php echo $row['idsp']; ?>)" />
									    <label for="312"></label>
									     <?php  
									    }
									    else {
									    ?>
									    <input id="312" type="checkbox" checked="checked" onclick="guiid(<?php echo $row['idsp']; ?>)" />
									    <label for="312"></label>
									    <?php
									   } 
										?>
									    
								 
									</div>
										</a> 
								</td>
									
									
							</tr>
						</table>
					</div>
					<?php 
							}
						}
					 ?>
					
					
				</div>
			</div>
		</div>

		
		<?php 
		
		include("lienhe.php");
		?>
</body>
</html>