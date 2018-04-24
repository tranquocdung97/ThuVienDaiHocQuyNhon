<?php
require 'model/getConnect.php';
require 'widget/top.php';
require 'widget/header.php';
if(isset($_SESSION['madn']))
        unset($_SESSION['madn']);
if(isset($_POST['dangnhap']))
{
    
    if(isset($_POST["tk"]) && isset($_POST["pass"]))
    {
        $tendn=$_POST['tk'];
        $mk=$_POST['pass'];
        //Kết nối đến cơ sở dữ liệu
        //Xây dựng lệnh truy vấn
        $lenh = "select * from user where madn='".$tendn."' and mkhau='".$mk."'";
        //Thực hiện câu lệnh truy vấn
        $ketqua = mysqli_query($ketNoi,$lenh) or die ("Không thực hiện được truy vấn");
        //Xử lý kết quả trả về
        if($row=mysqli_fetch_array($ketqua))
        {
            if($row['quyentruycap'] == "sinhvien" || $row['quyentruycap'] == "giaovien")
            {
                $_SESSION['madn'] = $tendn;
                header("location:index.php");
                
            }
            else
            {
                header("location:login.php");
            }
        }
        else
        {
            $mess="<p style='color:red'>Sai tài khoản hoặc mật khẩu!</p>";
        }
    }
}
?>
<script src="js/login.js"></script>
<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="inputEmail" name="tk" class="form-control" placeholder="Mã sinh viên" required autofocus>
            <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block btn-signin" name="dangnhap" type="submit">Sign in</button>
            <?php
            if(isset($mess))
                echo $mess;
            ?>
        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->
<?php require 'widget/footer.php'?>