<?php
$i = 0;
echo "<table class='table' >";
echo "<tr>";
while ($row = mysqli_fetch_array($kq)){
    $qq = get_access($ketNoi, $row['maloaisach']);
    $q = mysqli_fetch_array($qq)['quyentruycap'];
    $q = explode(',',$q);
    $coTheMuon = get_so_sach($ketNoi,$_SESSION['madn'],$row['maloaisach']);
    $sachTrongGio = mysqli_num_rows(load_sach_trong_gio($ketNoi,$_SESSION['madn'],$row['id']));
    if(array_search($qu,$q) >= 0 && $coTheMuon > 0 && $row['soluong'] > 0)
        $state = true;
    else $state = false;
    if($i % 4 == 0){
        echo "</tr>";
        echo "<tr>";
    }
    echo "<td style='width: 25%'>";
    if(substr($row['maloaisach'],0,2) == "ce")
        load_thumbnail_ebook($row['image'],$row['tensach'], $row['id'], $row['maloaisach']);
    else
        load_thumbnail($row['image'],$row['tensach'], $row['id'],$row['maloaisach'],$state);
    echo "</td>";
    $i++;
}
while($i <= 4){
    echo "<td></td>";
    $i++;
}
echo "</tr>";
echo "</table>";
?>