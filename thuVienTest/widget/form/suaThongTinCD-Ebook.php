<?php
echo "<div style='background-color: #3c3c3c; color: white; width: 70%'>
<form action=\"model/suaThongTinSach.php\" method=\"POST\" class=\"form-horizontal\" id='formSach'  enctype=\"multipart/form-data\" role=\"form\" style='display: none; width: 95%'>
<div class=\"form-group hide\">
    <label for=\"inputID\" class=\"col-sm-2 control-label \">ID</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"idcu\" class=\"form-control\" id=\"inputID\" readonly='true' value='$row[id]' placeholder=\"Nhập ID Sách\">
    </div>
  </div>
 <div class=\"form-group\">
    <label for=\"inputTenSach\" class=\"col-sm-2 control-label\">Tên Sách</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"tensach\" class=\"form-control\" id=\"inputTenSach\" value='$row[tensach]' placeholder=\"Nhập Tên Sách\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputTenTacGia\" class=\"col-sm-2 control-label\">Tác Giả</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"tentacgia\" class=\"form-control\" id=\"inputTenTacGia\" value='$row[tentacgia]' placeholder=\"Nhập Tên Tác Giả\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputNSB\" class=\"col-sm-2 control-label\">Nhà Xuất Bản</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"nhaxuatban\" class=\"form-control\" id=\"inputNSB\" value='$row[nhaxuatban]' placeholder=\"Nhập Tên Nhà Xuất Bản\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputMaLoaiSach\" class=\"col-sm-2 control-label\">Mã Loại Sách</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"maloaisach\" class=\"form-control\" id=\"inputMaLoaiSach\" value='$row[maloaisach]' placeholder=\"Nhập Mã Loại Sách\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputImg\" class=\"col-sm-2 control-label\">Hình Ảnh</label>
    <div class=\"col-sm-10\">
      <input type=\"file\" name=\"anh\" class=\"form-control\" id=\"inputImg\">
      <input type=\"text\" name=\"name-image\" readonly='true' value='$row[image]' class='hidden' >
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputMedia\" class=\"col-sm-2 control-label\">Media</label>
    <div class=\"col-sm-10\">
      <input type=\"file\" name=\"media\" class=\"form-control\" id=\"inputMedia\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputMoTa\" class=\"col-sm-2 control-label\">Mô Tả</label>
    <div class=\"col-sm-10\">
      <textarea name=\"mota\" class=\"form-control\" id=\"inputMoTa\" placeholder=\"Nhập Mô Tả\">$row[mota]</textarea>
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputTag\" class=\"col-sm-2 control-label\">Tag</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"tag\" class=\"form-control\" id=\"inputTag\" value='$row[tag]' placeholder=\"Nhập Thẻ\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputSL\" class=\"col-sm-2 control-label\">Số Lượng</label>
    <div class=\"col-sm-10\">
      <input type=\"number\"  name=\"soluong\" class=\"form-control\" id=\"inputSL\" value='$row[soluong]' placeholder=\"Nhập Số Lượng\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputGiaTien\" class=\"col-sm-2 control-label\">Giá Tiền</label>
    <div class=\"col-sm-10\">
      <input type=\"text\"  name=\"giatien\" class=\"form-control\" id=\"inputGiaTien\" value='$row[giatien]' placeholder=\"Nhập Giá Tiền\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\"  name=\"thuchien\" class=\"btn btn-default\">Thực hiện</button>
    </div>
  </div>
</form>
</div>";
?>

