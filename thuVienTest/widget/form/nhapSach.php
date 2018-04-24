<?php
if(isset($_POST['thuchien'])){
    if (empty($_POST['id']) && empty($_POST['tensach']) && empty($_POST['tacgia']) && empty($_POST['nxb']) && empty($_POST['loaisach'])
        && empty($_POST['mota']) && empty($_POST['tag']) && empty($_POST['soluong']) && empty($_POST['giatien'])) {
        echo "<script> alert('Vui lòng nhập đầy đủ thông tin sách!')</script>";
    } else {
        $id = $_POST['id'];
        $tensach = $_POST['tensach'];
        $tacgia = $_POST['tacgia'];
        $nxb = $_POST['nxb'];
        $ncn = date('Y/m/d - H:i:s');
        $loaisach = $_POST['loaisach'];
        $mota = $_POST['mota'];
        $tag = $_POST['tag'];
        $soluong = $_POST['soluong'];
        $giatien = $_POST['giatien'];
        if(!empty($_FILES['hinhanh']['name']))
            $hinhanh = $_FILES['hinhanh']['name'];
        else
            $hinhanh = '';
        $sql="INSERT INTO information_book
				VALUES('$id','$tensach','$tacgia','$nxb','$ncn','$ncn','$loaisach','$hinhanh','$mota','$tag',$soluong,'$giatien',0)";
        if(mysqli_query($ketNoi,$sql)){
            if($hinhanh != ''){
                    $path = "images/".$hinhanh;
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'],$path);
            }
            if(!empty($_FILES['media']['name'])){
                $ten = explode(".",$_FILES['media']['name']);
                $path = "images/".$id.end($ten);
                move_uploaded_file($_FILES['media']['tmp_name'],$path);
            }
        }
        else
            echo "<script> alert('Vui lòng nhập đầy đủ thông tin.')</script>";


    }
}

echo "<form class=\"form-horizontal\" action='admin.php?act=nhapsach' id='formSach' enctype=\"multipart/form-data\"  enctype=\"multipart/form-data\" method=\"POST\" role=\"form\" style='width: 70%'>
<div class=\"form-group\">
    <label for=\"inputID\" class=\"col-sm-2 control-label\">ID</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputID\" name='id' placeholder=\"Nhập ID sách\">
    </div>
  </div>
 <div class=\"form-group\">
    <label for=\"inputTenSach\" class=\"col-sm-2 control-label\">Tên sách</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputTenSach\" name='tensach' placeholder=\"Nhập Tên Sách\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputTenTacGia\" class=\"col-sm-2 control-label\">Tác giả</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputTenTacGia\" name='tacgia' placeholder=\"Nhập Tên Tác giả\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputNSB\" class=\"col-sm-2 control-label\">Nhà suất bản</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputNSB\" name='nxb' placeholder=\"Nhập Tên Nhà suất bản\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputLoaiSach\" class=\"col-sm-2 control-label\">Loại sách</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputLoaiSach\" name='loaisach' placeholder=\"Nhập loại sách\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputImg\" class=\"col-sm-2 control-label\">Hình ảnh</label>
    <div class=\"col-sm-10\">
      <input type=\"file\" class=\"form-control\" name='hinhanh' id=\"inputImg\">
    </div>
  </div>
    <div class=\"form-group\">
    <label for=\"inputFile\" class=\"col-sm-2 control-label\">Tệp</label>
    <div class=\"col-sm-10\">
      <input type=\"file\" class=\"form-control\" name='tep' id=\"inpuFile\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputMoTa\" class=\"col-sm-2 control-label\">Mô tả</label>
    <div class=\"col-sm-10\">
      <textarea class=\"form-control\" name='mota' id=\"inputMoTa\"></textarea>
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputTag\" class=\"col-sm-2 control-label\">Tag</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" name='tag' id=\"inputTag\" placeholder=\"Nhập thẻ\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputSL\" class=\"col-sm-2 control-label\">Số lượng</label>
    <div class=\"col-sm-10\">
      <input type=\"number\" class=\"form-control\" name='soluong' id=\"inputSL\" placeholder=\"Nhập số lượng\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputGiaTien\" class=\"col-sm-2 control-label\">Giá tiền</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" name='giatien' id=\"inputGiaTien\" placeholder=\"Nhập giá tiền\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" name='thuchien' class=\"btn btn-default\">Thực hiện</button>
    </div>
  </div>
</form>";
?>