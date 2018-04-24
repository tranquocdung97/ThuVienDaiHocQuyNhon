<?php
session_start();
if(isset($_SESSION['madn']) && isset($_POST['id'])){
    require '../model/getConnect.php';
    require '../model/load_sach.php';
    $lenh = "delete from cart WHERE madn = '$_SESSION[madn]' AND id = '$_POST[id]' ";
    if(mysqli_query($ketNoi,$lenh)){
        $lenh2 = "update information_book set soluong = soluong + 1 WHERE id = '$_POST[id]'";
        if (substr($_POST['maloaisach'], 0, 2) == 'gt') {
            $cot = "cothemuonsachgiaotrinh";
        } else {
            $cot = "cothemuonsachthamkhao";
        }
        $lenh3 = "update information_user set $cot = $cot + 1 WHERE madn = '$_SESSION[madn]'";
        if(mysqli_query($ketNoi,$lenh2) && mysqli_query($ketNoi,$lenh3)){
            $thongbao = "xóa thành công";
        }

    }
    else $thongbao = "không có sách này trong giỏ";
    $soSachgt = 0;
    $soSachkt = 0;
    $kq = get_so_sach_trong_gio($ketNoi, $_SESSION['madn']);
    while ($sosach = mysqli_fetch_array($kq)) {
        if (substr($sosach['id'], 0, 2) == 'gt')
            $soSachgt++;
        else
            $soSachkt++;
    }
    $lenh = "select * from information_user WHERE madn = '$_SESSION[madn]'";
    $ketqua=mysqli_query($ketNoi,$lenh) or die ("Không thực hiện được truy vấn");
    if($row=mysqli_fetch_array($ketqua))
    {
        $gt = 5 - $row['cothemuonsachgiaotrinh'];
        $tk = 3 - $row['cothemuonsachthamkhao'];
    }
    $ketqua = array("thongbao" => $thongbao, 'sachgiaotrinh' => $soSachgt, 'sachthamkhao' => $soSachkt, 'gt' => $gt, 'tk' => $tk);
    echo json_encode($ketqua);
}
?>