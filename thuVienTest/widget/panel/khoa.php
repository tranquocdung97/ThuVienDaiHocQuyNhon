<?php
if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 0;
$soTrang = 0;
$kq = load_sach_khoa($ketNoi,$_SESSION['madn'],$page,$soTrang);
echo "<div class=\"panel panel-default\" style='width: 75%; margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Sách trong khoa</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
if($kq) {
    require 'widget/load_sach.php';
    load_phan_trang($soTrang,"index.php?page=",$page);
}
else echo "Loi load sach";
echo "</div>";
echo "</div>";
?>