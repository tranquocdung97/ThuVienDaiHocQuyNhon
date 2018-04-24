<?php
session_start();
    if ( isset($_SESSION['madn']) && isset($_POST['id']) && isset($_POST['ten']) && isset($_POST['maloaisach'])) {
        require '../model/getConnect.php';
        require '../model/load_sach.php';
        $coTheMuon = get_so_sach($ketNoi, $_SESSION['madn'], $_POST['maloaisach']);
        $soluong = mysqli_fetch_array(load_sach($ketNoi, $_POST['id']))['soluong'];
        $ngay = date('Y-m-d H:i:s');
        $lenh1 = "insert into cart VALUES ('$_SESSION[madn]','$_POST[id]','$_POST[ten]','$ngay')";
        $lenh2 = "update information_book set soluong = soluong - 1 WHERE id = '$_POST[id]'";
        if (substr($_POST['maloaisach'], 0, 2) == 'gt') {
            $cot = "cothemuonsachgiaotrinh";
        } else {
            $cot = "cothemuonsachthamkhao";
        }
        $lenh3 = "update information_user set $cot = $cot - 1 WHERE madn = '$_SESSION[madn]'";
        if ($coTheMuon > 0 && $soluong > 0)
            if (mysqli_query($ketNoi, $lenh1) && mysqli_query($ketNoi, $lenh2) && mysqli_query($ketNoi, $lenh3))
                $thongbao = "thêm thành công";
            else $thongbao = "lỗi khi thêm sách";
        else $thongbao = "bạn không thể thêm sách";

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
        $ketqua = array("thongbao" => $thongbao, 'sachgiaotrinh' => $soSachgt, 'sachthamkhao' => $soSachkt,'gt' => $gt, 'tk' => $tk);
        echo json_encode($ketqua);
    }


?>