<?php
$kq = load_sach_moi($ketNoi);
$u = get_info_user($ketNoi, $_SESSION['madn']);
$qu = mysqli_fetch_array($u)['quyentruycap'];
echo "<div class=\"panel panel-default\" style='width: 75%; margin-left: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Sách mới</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
if($kq){
    require 'widget/load_sach.php';
}
else echo "loi load sach";

echo "</div>";
echo "</div>";
?>