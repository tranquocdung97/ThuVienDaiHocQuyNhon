<?php
function load_sach($ketNoi, $id){
    $lenh = "select * FROM information_book WHERE id = '$id'";
    $q = mysqli_query($ketNoi, $lenh);
    return $q;
}
function get_info_user($ketNoi, $madn){
    $lenh = "select * from information_user WHERE madn ='$madn'";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}

function getKhoa($ketNoi, $madn){
    $lenh = "select khoa from information_user WHERE madn = '$madn'";
    $ketqua = mysqli_query($ketNoi,$lenh);
    if($r = mysqli_fetch_array($ketqua)){
        return "gt_".$r['khoa'];
    }
    return false;
}

function get_access($ketNoi, $maLoaiSach){
    $lenh = "select quyentruycap from kind_of_book WHERE maloaisach = '$maLoaiSach' ";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}

function get_so_sach($ketNoi,$madn,$maloaisach){
    $loai = substr($maloaisach,0,2) ;
    if($loai == 'gt'){
        $lenh1 = "select * from detail_borrow_book WHERE madn ='$madn' AND SUBSTRING(id,1,2) = 'gt' AND datra = 0";
            if(mysqli_num_rows(mysqli_query($ketNoi, $lenh1)) > 0)
                return 0;

        $cot = "cothemuonsachgiaotrinh";
    }
    else
        $cot = "cothemuonsachthamkhao";

    $lenh = "select $cot from information_user WHERE madn = '$madn'";
    $ketqua = mysqli_fetch_array(mysqli_query($ketNoi,$lenh))["$cot"];
    return $ketqua;
}

function load_sach_khoa($ketNoi, $madn,$page,&$sotrang){
    $khoa = getKhoa($ketNoi,$madn);
    if($khoa){
        $lenh = "select id, tensach, image, maloaisach, soluong  from information_book WHERE maloaisach = '$khoa'";
        $sotrang = mysqli_num_rows(mysqli_query($ketNoi,$lenh))/20;
        $start = $page * 20;
        $lenh = "select id, tensach, image, maloaisach, soluong  from information_book WHERE maloaisach = '$khoa' LIMIT $start , 20";
        $ketqua = mysqli_query($ketNoi,$lenh);
        return $ketqua;
    }

    return false;
}
function load_sach_moi($ketNoi){
    $lenh = "select id, tensach, image, maloaisach, soluong from information_book ORDER BY ngaycapnhatdautien DESC LIMIT 12";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}
function load_sach_xem_nhieu($ketNoi){
    $lenh = "select * from information_book  ORDER BY luotxem DESC LIMIT 12";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}
function load_sach_lien_quan($ketNoi, $tag){
        $t =explode(",",$tag);

    if(isset($t[0])){
        $dk = "tag like '%t[0]%' ";
        for($i = 1 ; $i < count($t) ; $i++)
            $dk += " OR tag like '%$t[$i]%'";
        $lenh = "select id, tensach , image, maloaisach, soluong from information_book WHERE $dk";
        $ketqua = mysqli_query($ketNoi,$lenh);
        return $ketqua;
    }
    return false;
}
function load_sach_theo_loai($ketNoi, $loai,$page, &$sotrang){
    $lenh = "select id, tensach, image, maloaisach, soluong from information_book WHERE maloaisach='$loai'";
    $sotrang = mysqli_num_rows(mysqli_query($ketNoi,$lenh))/20;
    $start = $page * 20;
    $lenh = "select id, tensach, image, maloaisach, soluong from information_book WHERE maloaisach='$loai' LIMIT $start, 20";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}
function get_so_sach_trong_gio($ketNoi , $madn){
    $lenh = "select * from cart WHERE madn = '$madn'";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}
function load_sach_trong_gio($ketNoi,$madn,$id){
    $lenh = "select * from cart WHERE madn = '$madn' AND id = '$id'";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}
function loadSachTheoTen($ketNoi, $ten,$page,&$sotrang){
    $ten = mb_strtolower($ten,'UTF-8');
    $lenh = "select *  from information_book WHERE LOWER(tensach) LIKE '%$ten%'";
    $sotrang = mysqli_num_rows(mysqli_query($ketNoi,$lenh))/20;
    $start = $page * 20;
    $lenh = "select * from information_book WHERE LOWER(tensach) LIKE '%$ten%' LIMIT $start, 20";
    $ketqua = mysqli_query($ketNoi,$lenh);
    return $ketqua;
}

?>