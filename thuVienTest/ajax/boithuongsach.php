<?php
session_start();
require '../model/getConnect.php';
if(isset($_SESSION['maadmin']) && isset($_POST['tensach']) && isset($_POST['id']) && isset($_POST['tinhtrang']) && isset($_POST['lido']) &&
    isset($_POST['nguoibt']) && isset($_POST['tien']) &&isset($_POST['ghichu'])){
    $tg = date('Y-m-d H:i:s');
    $lenh = "insert into indemnify_book VALUES ('$_POST[tensach]','$_POST[id]','$_POST[tinhtrang]','$_POST[lido]','$_POST[nguoibt]','$tg',$_POST[tien],'$_SESSION[maadmin]','$_POST[ghichu]')";
    if(mysqli_query($ketNoi,$lenh)){
        echo "Đã bồi thường";
    }
    else
        echo "Bị thất bại";
}
else "error";
?>