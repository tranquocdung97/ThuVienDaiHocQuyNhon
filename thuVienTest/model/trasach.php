<?php
require 'model/getConnect.php';
require 'load_sach.php';
if(!empty($_GET['search'])){
    $keyword = $_GET['search'];
    $lenh = "select * from detail_borrow_book WHERE madn like '%$_GET[search]%' AND datra = 0";
}
else
    $lenh = "select * from detail_borrow_book WHERE datra = 0";
if($q = mysqli_query($ketNoi, $lenh))
    while ($row = mysqli_fetch_array($q)){
        $sach = load_sach($ketNoi,$row['id']);
        $user = get_info_user($ketNoi,$row['madn']);
        if($sach && $user){
            $sach = mysqli_fetch_array($sach);
            $user = mysqli_fetch_array($user);
            if($sach && $user){
                $ngaymuon = floor((time() - strtotime($row['ngaymuon'])) /86400);
                if($ngaymuon > 10){
                    $ngaytre = $ngaymuon - 10;
                    $tienNo= $ngaytre * 10000;
                }
                else {
                    $ngaytre = 0;
                    $tienNo = 0;
                }
                echo "<tr>";
                echo "<td>$user[madn] <br>$user[hodem] $user[ten]<br>$user[nganh]<br>$user[lop]</td>";
                echo "<td>$sach[tensach]<br>$sach[tentacgia]<br>$sach[nhaxuatban]</td>";
                echo "<td><img src='images/$sach[image]' style='width: 75px ; height: 150px'></td>";
                echo "<td>$row[ngaymuon]</td>";
                echo "<td>$tienNo</td>";
                echo "<td>";
                require 'widget/form/boithuong.php';
                echo "</td>";
                echo "<td><button class=\"btn btn-default tra\">Xác nhận</button><div class='hidden madn'>$row[madn]=*=$row[id]=*=$sach[tensach]=*=$sach[maloaisach]=*=$ngaytre</div></td>";
                echo "</tr>";

            }
        }

    }
?>