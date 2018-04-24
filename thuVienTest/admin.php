<?php
require 'widget/top.php';
if(empty($_SESSION['maadmin']))
    header("location:login_admin.php");
require 'model/getConnect.php';
require 'widget/xoakhiquahan.php';
require 'widget/header.php';
if(isset($_GET['act']))
    $act = $_GET['act'];
else $act = 'qlsach';
require 'widget/menuAdmin.php';
if(!strcmp($act,'qlsach')){
    $t = 1;
    require 'widget/panel/quanLySach.php';
}

else if(!strcmp($act,'muonsach')){
    $t = 2;
    require 'widget/panel/muonSach.php';
}

else if(!strcmp($act,'trasach')){
    $t = 3;
    require 'widget/panel/traSach.php';
}

else if(!strcmp($act,'nhapsach')){
    $t = 4;
    require 'widget/panel/nhapSach.php';
}
require 'widget/footer.php';
echo "<script>
    $('#$t').addClass('active');
</script>";
?>

