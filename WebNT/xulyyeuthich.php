<?php 
    session_start();
    $connect=mysqli_connect("localhost","root","","noithat");
    $idsp=$_POST['idsp'];
    $date = getdate();
    $ngay=$date['year'].'-'.$date['mon'].'-'.$date['mday'];
    echo $ngay;
    $sql1="SELECT * from yeuthich WHERE idsp=$idsp and iduser=".$_SESSION['id'];
    $query1=mysqli_query($connect,$sql1);
    $row1=mysqli_fetch_assoc($query1);
    if (mysqli_num_rows($query1)<1) {
        $sql3="INSERT INTO yeuthich(idsp,iduser,ngay) VALUES(".$idsp.",".$_SESSION['id'].",'".$ngay."')";
        $query3=mysqli_query($connect,$sql3);
    }
    else {

        $sql2="DELETE  FROM yeuthich WHERE id=".$row1['id'];
        $query2=mysqli_query($connect,$sql2);
        
   }
    
    
 ?>