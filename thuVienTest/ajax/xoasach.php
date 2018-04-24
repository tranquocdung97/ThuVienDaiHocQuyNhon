<?php
require '../model/getConnect.php';
if(isset($_POST['id'])){
    $lenh = "delete from information_book WHERE id = '$_POST[id]'";
    if(mysqli_query($ketNoi , $lenh))
        echo "xóa thành công";
    else echo "Không thể xóa";
}
?>
