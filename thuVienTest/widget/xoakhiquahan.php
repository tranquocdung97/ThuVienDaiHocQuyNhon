<?php
$now = time();
$lenh = "select * from cart ";
$q = mysqli_query($ketNoi, $lenh);
while ($row = mysqli_fetch_array($q)){
    $ngay = strtotime($row['ngayvaogio']) + 172800;
    if($ngay < $now){
        $lenh = "delete from cart WHERE madn = '$row[madn]' AND id = '$row[id]' ";
        if(mysqli_query($ketNoi,$lenh)){
            $lenh2 = "update information_book set soluong = soluong + 1 WHERE id = '$row[id]'";
            if (substr($row['id'], 0, 2) == 'gt') {
                $cot = "cothemuonsachgiaotrinh";
            } else {
                $cot = "cothemuonsachthamkhao";
            }
            $lenh3 = "update information_user set $cot = $cot + 1 WHERE madn = '$row[madn]'";
            mysqli_query($ketNoi,$lenh2);
            mysqli_query($ketNoi,$lenh3);
        }
    }
}

?>