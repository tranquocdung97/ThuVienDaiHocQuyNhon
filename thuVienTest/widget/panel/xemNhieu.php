<?php
$kq = load_sach_xem_nhieu($ketNoi);
$u = get_info_user($ketNoi, $_SESSION['madn']);
$qu = mysqli_fetch_array($u)['quyentruycap'];
echo "<div class=\"panel panel-default\" style='float: right;width: 23%; height: 512px; margin-left: 5px; margin-right: 5px; overflow: auto'>";
echo "<div class=\"panel-heading\">";
echo "<h3 class=\"panel-title\">Sách xem nhiều</h3>";
echo "</div>";
echo "<div class=\"panel-body\">";
if($kq){
    while ($row = mysqli_fetch_array($kq)){
        $qq = get_access($ketNoi, $row['maloaisach']);
        $q = mysqli_fetch_array($qq)['quyentruycap'];
        $q = explode(',',$q);
        $coTheMuon = get_so_sach($ketNoi,$_SESSION['madn'],$row['maloaisach']);
        $sachTrongGio = mysqli_num_rows(load_sach_trong_gio($ketNoi,$_SESSION['madn'],$row['id']));
        if(array_search($qu,$q) >= 0 && $coTheMuon > 0 && $row['soluong'] > 0 && $sachTrongGio == 0)
            $state = true;
        else $state = false;
        echo "<div style=' margin: auto'>";
        load_thumbnail($row['image'],$row['tensach'],$row['id'],$row['maloaisach'],$state);
        echo "</div>";
    }
}
else echo "loi load sach";

echo "</div>";
echo "</div>";
?>
