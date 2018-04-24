<?php
if(isset($_POST['madn']) && isset($_POST['id'])){
    require '../model/getConnect.php';
    $lenh = "delete from cart WHERE madn = '$_POST[madn]' AND id = '$_POST[id]' ";
    $q = mysqli_query($ketNoi,$lenh);
    if($q){
        $ngay = date('Y-m-d H:i:s');
        $lenh = "INSERT INTO detail_borrow_book VALUES ('$_POST[madn]','$_POST[id]','$ngay',NULL,0)";
        $lenh1="UPDATE information_user SET damuon=damuon+1 WHERE madn='".$_POST['madn']."'";
		mysqli_query($ketNoi,$lenh1);
		if(mysqli_query($ketNoi,$lenh)){
            echo "Mượn thành công";
        }
        else echo "Lỗi mượn sách";
    }
    else echo "Lỗi";
}
?>