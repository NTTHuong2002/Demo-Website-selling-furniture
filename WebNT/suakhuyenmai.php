<?php 
	$conn=mysqli_connect("localhost","root","","noithat");
	if (isset($_GET['id'])) { 
		$sql="SELECT * FROM khuyenmai WHERE id=".$_GET['id'];
		$ketqua=mysqli_query($conn,$sql);
		$row1=mysqli_fetch_assoc($ketqua);	
	}			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa khuyến mãi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php include('menuadmin.php') ?>
	<div id="main1" style="margin-left: 20%">
	<div class="container">
		<h1>Sửa hàng hóa</h1>
	<form action="xulykhuyenmai.php" method="POST" >
		
		<input type="hidden" name="id" value="<?php echo $row1['id'];?>"><br>
		Tiêu đề: <input type="text" name="tieude" value="<?php echo $row1['tieude'];?>"><br>
		Link ảnh cũ : <input type="text" name="anh1" value="<?php echo $row1['anh']; ?>"><br>
		Link mới: <input type="file" id="myfile" name="anh" value="<?php echo $row1['anh'];?>"><br>
		Giảm giá:
		<select name="giamgia" >
			<?php
				$i=0.1;
				while ($i<0.4) {
					if($i==$row1['giamgia']) {
						$sel="selected";
						if($i<3){
						$gi=$i*100;
						echo '<option value="'.$i.'" '.$sel.'>'.$gi.'%</option>';
						}else {
							echo '<option value="0.5"  '.$sel.'>50%</option>';
						}

					}
					else {
						$gi=$i*100;
						echo '<option value="'.$i.'" >'.$gi.'%</option>';
					}
					$i+=0.1;
					
				}

			?>
		</select>
		
		Nội dung:  <textarea class="ckeditor col-12" name="noidung" cols="80" rows="10">
			<?php echo $row1['noidung']; ?>
		        </textarea> 
		<input  type="submit" value="sửa"  >
	</form>
	</div>
</div>
</body>
</html>