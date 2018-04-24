<?php
if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 0;
$soTrang = 0;
echo "<div class=\"panel panel-default\" style='width: 70%; margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">$_GET[search]</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
$ten = $_GET['search'];
$kq = loadSachTheoTen($ketNoi,$ten,$page,$soTrang);
if($kq) {
    require 'widget/load_sach.php';
    load_phan_trang($soTrang,"search.php?search=$ten&page=",$page);
}
echo "</div>";
echo "</div>";
?>