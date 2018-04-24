<?php
    require 'widget/top.php';
	if(!isset($_SESSION['maadmin']) &&  !isset($_SESSION['madn']))
		header("location:login.php");
    require 'model/getConnect.php';
    require 'widget/xoakhiquahan.php';
    require 'model/load_sach.php';
    require 'widget/header.php';
    require 'widget/menuAdmin.php';
    $name = $_SESSION['maadmin'];
?>
<?php
    if(isset($_POST['thaydoi']))
    {
        if(!empty($_POST["mkc"]) && !empty($_POST["mkm1"]) && !empty($_POST["mkm2"]))
        {
            $mkc=$_POST['mkc'];
            $mkm1=$_POST['mkm1'];
            $mkm2=$_POST['mkm2'];
            //Kết nối cơ sở dữ liệu 
            
            //Xây dựng lệnh truy vấn 
                $mk= "select * from user where madn='$name' and mkhau='".$mkc."';";
                $update1 ="update  user set mkhau='".$mkm1."' where madn='".$name."'";
            //Thực hiện truy vấn
                $ketqua= mysqli_query($ketNoi,$mk);
            //Xử lý kết quả trả về
                if($row=mysqli_fetch_array($ketqua))
                {
                    if($mkm1==$mkm2)
                    {
                        $kq=mysqli_query($ketNoi,$update1) or die ("Không thực hiện được");
                        $mess= "Thay đổi mật khấu thành công";
                    }
                    else
                        $mess = "Thay đổi mật khẩu không thành công";
                }
                else $mess = "Mật khẩu cũ không đúng";
            //Đóng kết nối
            mysqli_close($ketNoi);   
        }
        else $mess = "Chưa nhập đủ thông tin";
    } 
?>

<link href="cssThaydoi.css" rel="stylesheet" type="text/css" />
<div id="main" style="width: 100%; height: 500px">
    <div id="if2f0">

    </div>
        <div id="if2f1">
            <p id="ketqua">Thay đổi mật khẩu</p>
        </div>
        <div id="if2f3"></div>
        <div id="if2f2">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <table id="table" border="0">
                    <tr>
                        <td id="mdk">Chào:</td>
                        <td ><?php echo $name;?></td>
                    </tr>
                    <tr>
                        <td id="mdk">Mật khẩu cũ:</td>
                        <td><input type="password" name="mkc"/></td>
                    </tr>
                    <tr>
                        <td id="mdk">Mật khẩu mới:</td>
                        <td><input type="password" name="mkm1"/></td>
                    </tr>
        			<tr>
                        <td id="mdk">Nhập lại mật khẩu:</td>
                        <td><input type="password" name="mkm2"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="dk" type="submit" name="thaydoi" value="Thay đổi" /></td>
                    </tr>

                </table>
            </form>
        </div>
</div>
<?php
if(isset($mess))
    echo "<script>alert('$mess');</script>";
?>
<?php

require 'widget/footer.php'?>