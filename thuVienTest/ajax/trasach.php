<?php
session_start();
require "../model/getConnect.php";
if(isset($_SESSION['maadmin']) && isset($_POST['madn']) && isset($_POST['id']) && isset($_POST['loaisach']) && isset($_POST['ngaytre'])){
    $ng = date('Y-m-d H:i:s');
    if($_POST['ngaytre'] > 0){
        $lenh = "insert into indemnify_book VALUES ('$_POST[tensach]','$_POST[id]','','trả trễ $_POST[ngaytre] ngày','$_POST[madn]','$ng',$_POST[ngaytre]*10000,'$_SESSION[maadmin]','')";
        mysqli_query($ketNoi,$lenh);
    }


    $lenh1 = "update detail_borrow_book set datra = 1, ngaytra = '$ng' WHERE madn = '$_POST[madn]' AND id = '$_POST[id]' AND datra = 0";
    if(mysqli_query($ketNoi,$lenh1)){
        $lenh2 = "update information_book set soluong = soluong + 1 WHERE id = '$_POST[id]'";
        if(mysqli_query($ketNoi,$lenh2)){
            if(substr($_POST['loaisach'],0,2) == 'gt')
                $cot = "cothemuonsachgiaotrinh";
            else
                $cot = "cothemuonsachthamkhao";

            $lenh3 = "update information_user set $cot = $cot +1 WHERE madn = '$_POST[madn]'";
            if(mysqli_query($ketNoi,$lenh3))
                echo "trả sách thành công";
            else
                echo "trả sách thấy bại";
        }
        else echo "2";
    }
    else echo "1";

}
else echo "sai lớn"
?>