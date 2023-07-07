<?php

  $conn=mysqli_connect("localhost","root","","noithat");
  $ten='';$pas='';$usernameErr='';$PasswordErr='';
  $t='';$s='';$id='';$email='';
  if($_SERVER["REQUEST_METHOD"]=="POST"){

    $ten=$_POST['tendn'];
    $pas=md5($_POST['mk']);
    $sql = "SELECT * FROM taikhoan WHERE tendn = '$ten' AND   matkhau = '$pas' ";
    $ketqua = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($ketqua);
    $data=mysqli_fetch_assoc($ketqua);
    if ($row!=1||$data['trangthai']=="block") {
     
      $s= "<p align='center'>tên đăng nhập hoặc mật khẩu không đúng !</p> <br>";
    }else{
      $id=$data['id'];
      $email=$data['email'];
      $t="tc";
      if ($data['vaitro']=="admin") {
        header('Location: admin.php');
      }
      else header('Location: trangchu.php');
    }
    
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
<style>

form.f1 {width: 50%;margin-left: 25%;height: 100%}
div.container-fluid{
background-image: url('img/anhdangnhap.jpg');
background-size: 100% 100%;
background-repeat: no-repeat;
font-family: sans-serif;
}
input.in {
  width: 60%;
  margin-left: 20%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 15px;

}
input.in:hover{
  
}
  p{
    color: white;
  }
   h2{
    color: white;
  }
button.b1  {
  background-color: #4CAF50;
  color: white;
  padding: 8px 8px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container1 {
  padding: 16px;
  width: 100%;
  height: 4 00px;
 
  background-color: rgba(0,0,0,0.5) !important;
}

</style>
</head>
<body style="height: 730px">

<?php 
include("menu.php") ;  
    if ($t=="tc") {
      $admin=$data['vaitro'];
      $_SESSION['vt']=$admin;
      $_SESSION['ten']=$ten;
      $_SESSION['id']=$id;
      $_SESSION['email']=$email;
      }
    else{
      ?>

<div class="container-fluid" style="height: 81%">
 <form class="f1" action="dangnhap.php" method="post" >
  <div class="container1 ">
    <div class="row">
      <div class="col-12">
       
          <p ><h2 style="color: white">Đăng nhập</h2><br></p>
          <input class=" form-group in"  type="text" placeholder="Nhập tên đăng nhập" name="tendn" required value="<?php echo $ten; ?>">
          <input type="password" class="form-group in" placeholder="Nhập mật khẩu" name="mk" required>
          <?php echo $PasswordErr; ?><br>
          <?php echo $s; ?>
          <p align="left" class="t" style="align-content: left"><input type="checkbox" class="t"  name=""> Remember me</p>
          <a href="dangky.php" style="color: white;text-decoration: none">Bạn chưa có tài khoản?(Đăng ký)</a>
          <p align="center"><button class="b1 btn btn-lg" type="submit" >Đăng nhập</button></p>

        <div class="container" style="background-color:#f1f1f1">
           
        </div>
        
      </div>
    </div>
   
  </div>
</form>
</div>

  <?php 
    }
    
   ?> 
</body>
</html>
