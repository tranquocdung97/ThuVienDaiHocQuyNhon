<?php
require 'widget/top.php';
if(empty($_SESSION['madn']))
    header("location:login.php");
if(isset($_GET['i']))
    $loaiSach = $_GET['i'];
else
    $loaiSach = 'gt1';
require 'model/getConnect.php';
require 'widget/xoakhiquahan.php';
require 'model/load_sach.php';
require 'widget/header.php';
require 'widget/menu.php';
require 'widget/panel/thumbnail.php';
require 'widget/panel/xemNhieu.php';
require 'widget/panel/phantrang.php';

if(!strcmp($loaiSach,"gt1"))
    $l = "Khoa Toán";
else if(!strcmp($loaiSach,"gt2"))
    $l = "Khoa Vật Lý";
else if(!strcmp($loaiSach,"gt3"))
    $l = "Khoa Hóa";
else if(!strcmp($loaiSach,"gt4"))
    $l = "Khoa Lịch sử";
else if(!strcmp($loaiSach,"gt5"))
    $l = "Khoa Sinh - KTNN";
else if(!strcmp($loaiSach,"gt6"))
    $l = "Khoa Địa lý - Địa chính";
else if(!strcmp($loaiSach,"gt7"))
    $l = "Khoa Công nghệ thông tin";
else if(!strcmp($loaiSach,"gt8"))
    $l = "Khoa Ngữ Văn";
else if(!strcmp($loaiSach,"gt9"))
    $l = "Khoa Ngoại Ngữ";
else if(!strcmp($loaiSach,"gt10"))
    $l = "Khoa GD Tiểu học và Mầm non";
else if(!strcmp($loaiSach,"gt11"))
    $l = "Khoa GD Chính trị và QL nhà nước";
else if(!strcmp($loaiSach,"gt12"))
    $l = "Khoa Giáo dục thể chất - Quốc phòng";
else if(!strcmp($loaiSach,"gt13"))
    $l = "Khoa Tâm lý - Giáo dục và CTXH";
else if(!strcmp($loaiSach,"gt14"))
    $l = "Khoa TC-NH & QTKD";
else if(!strcmp($loaiSach,"gt15"))
    $l = "Khoa Kinh Tế & Kế Toán";
else if(!strcmp($loaiSach,"gt16"))
    $l = "Khoa Kỹ Thuật & Công Nghệ";
else if(!strcmp($loaiSach,"tk1"))
    $l = "Tiểu Thuyết";
else if(!strcmp($loaiSach,"tk2"))
    $l = "Lịch Sử";
else if(!strcmp($loaiSach,"tk3"))
    $l = "Tuổi Học Trò";
else if(!strcmp($loaiSach,"tk4"))
    $l = "Phong tục Việt Nam";
else if(!strcmp($loaiSach,"tk5"))
    $l = "Kĩ năng sống";
else if(!strcmp($loaiSach,"tk6"))
    $l = "Nghệ thuật sống";
else if(!strcmp($loaiSach,"tk7"))
    $l = "Hồi Ký";
else if(!strcmp($loaiSach,"tk8"))
    $l = "Kiếm Hiệp";
else if(!strcmp($loaiSach,"tk9"))
    $l = "Tùy bút";
else if(!strcmp($loaiSach,"tk10"))
    $l = "Tập Truyện Ngắn";
else if(!strcmp($loaiSach,"tk11"))
    $l = "Giáo Dục";
else if(!strcmp($loaiSach,"tk12"))
    $l = "Thơ";
else if(!strcmp($loaiSach,"lv1"))
    $l = "luận văn thạc sĩ";
else if(!strcmp($loaiSach,"lv2"))
    $l = "luận án tiến sĩ";
else if(!strcmp($loaiSach,"lv3"))
    $l = "Khóa luận sinh viên";
else if(!strcmp($loaiSach,"lv4"))
    $l = "Luận văn, luận án khác";
else if(!strcmp($loaiSach,"sb1"))
    $l = "Tạp chí";
else if(!strcmp($loaiSach,"sb2"))
    $l = "Báo thanh niên";
else if(!strcmp($loaiSach,"sb3"))
    $l = "Báo tuổi trẻ";
else if(!strcmp($loaiSach,"sb4"))
    $l = "Báo khác";
else if(!strcmp($loaiSach,"ce1"))
    $l = "Video";
else if(!strcmp($loaiSach,"ce2"))
    $l = "CD-English";
else if(!strcmp($loaiSach,"ce3"))
    $l = "Ebook";
else
    $l = "CD-khác";
if(!isset($_GET['page']))
    $page = 0;
else $page = $_GET['page'];
$ls = substr($loaiSach,0,2)."_".substr($loaiSach,2);
$kq = load_sach_theo_loai($ketNoi,$ls,$page,$sotrang);
echo "<div class=\"panel panel-default\" style='width: 75%; margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">$l</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
if($kq){
    require 'widget/load_sach.php';
    load_phan_trang($sotrang,"categories.php?i=tk1&page=",$page);
}
else echo "loi load sach";
echo "</div>";
echo "</div>";
require 'widget/footer.php';


?>