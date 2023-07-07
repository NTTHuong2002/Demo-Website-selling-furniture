<!DOCTYPE html>
<html>
<head>
	<title>Danh sách bình luận</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		function gui(idbl){
			var idbl=idbl;
			var t='#noidungbinhluan' + idbl; 
			
        	var txt =$(t).val();
        	var iduser=$("input[name='iduser']").val();
        	var tenuser=$("input[name='tenuser']").val();
        	var ngay=$("input[name='ngay']").val();
        	$.post("xulytraloibinhluan.php", {noidung: txt,idbl: idbl,iduser: iduser,tenuser: tenuser,ngay: ngay}, function(ketqua){
        	 $("#dsbinhluan"+idbl).append('<br><table style="margin-left: 100px"><tr><td width="150px"><div ><img src="img/adn.jpg" style="width: 30px;heigh: 30px" class="img-circle">'+tenuser+'</td><td width="250px">'+ngay+'</td><td width="250px">'+txt+'</div></td></tr></table><br>');
        			
		});
	}
        	

       </script>
</head>
<body>

<?php include("menuadmin.php"); ?>
<div id="main1" style="margin-left: 20%">
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>Danh sách Bình luận </h3>
			
				<?php 
					
					$date = getdate();
					$conn=mysqli_connect("localhost","root","","noithat");
					$sql="SELECT * FROM binhluan  ";
					$query=mysqli_query($conn,$sql);
					?>
					<input type="hidden" name="iduser" value="<?php echo $_SESSION['id']; ?>">
					<?php
					echo '<input type="hidden" name="tenuser" value="'.$_SESSION['ten'].'">';
					echo '<input type="hidden" name="ngay" value="'.$date['year'].'-'.$date['mon'].'-'.$date['mday'].' '.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds'].' ">';
					
					while($row=mysqli_fetch_assoc($query)){
						$sql_taikhoan="SELECT * FROM taikhoan where id=".$row['iduser']."  ";
						$query_taikhoan=mysqli_query($conn,$sql_taikhoan);
						$row_taikhoan=mysqli_fetch_assoc($query_taikhoan);
						if ($row_taikhoan['trangthai']!="block") {
						$sql1="SELECT * FROM hanghoa where id=".$row['idsp']."  ";
						$query1=mysqli_query($conn,$sql1);
						$row1=mysqli_fetch_assoc($query1);
						?>
					
					<table class="table" border="1">
						<tr>
							<td width="30%"><a href="chitietsp.php?idhang=<?php echo $row1['id']; ?>"><img src="img/<?php echo $row1['anh']; ?>" width="50%" heigh="30%" alt=""><?php echo $row1['tenhang']; ?></td>
							<td width="15%"><img src="img/adn.jpg" style="width: 30px;height: 30px;" class="img-circle"> <?php echo$row['tenuser']; ?></td>
							<td width='15%'><?php echo $row['thoigian']; ?></td>
							<td width='15%'><?php echo $row['noidung']; ?></td>
							<td width="25%">
								<button type="button" class="btn btn-sm "  data-toggle="collapse" data-target="#demo1<?php echo $row['id']; ?>">Trả lời</button>
								<button type="button" class="btn btn-sm "  data-toggle="collapse" data-target="#demo<?php echo $row['id']; ?>">Xem bình luận</button>
								<a href="blockKH.php?idkh=<?php echo $row['iduser']; ?>" title=""><button type="button" class="btn btn-sm "  >Block</button></a>
							</td>	
						</tr>
					</table>
				
					<div class="col-12 collapse" id="demo<?php echo $row['id']; ?>"> 
					<?php
					$sql1="SELECT * FROM traloibl where idbl=".$row['id'];
					$query1=mysqli_query($conn,$sql1);
					while($row1=mysqli_fetch_assoc($query1)){
							?>
						<table style="margin-left: 100px" >
							<tr>
								<td width="150px"><img src="img/adn.jpg" style="width: 30px;height: 30px" class="img-circle"><?php echo $_SESSION['ten']; ?></td>
								<td width="250px"><?php echo $row1['ngay']; ?></td>
								<td width="250px"><?php echo $row1['noidung']; ?></td>
							</tr>
						</table>
						<?php
						}
					?>
					</div>
				<?php
						}
				?>
				<div class="col-12" id="dsbinhluan<?php echo $row['id']; ?>">
				</div>
				<div class=" col-12 collapse" id="demo1<?php echo $row['id']; ?>" style="margin-left: 100px"> 
					<br>	
					<img src="img/adn.jpg" style="width: 30px;heigh: 30px;margin: 0 0 0 0 " class="img-circle"> <?php echo $_SESSION['ten']; ?>
					<input type="text" name="noidungbinhluan<?php echo $row['id']; ?>" id="noidungbinhluan<?php echo $row['id']; ?>">
					<input type="button" name="" value="Gửi"  onclick="gui(<?php echo $row['id']; ?>)">
				</div> 
				<?php
					}
				?>	
			</div>
			
			
					
		
		
		</div>
 	</div>
</div>
 </body>
</html>