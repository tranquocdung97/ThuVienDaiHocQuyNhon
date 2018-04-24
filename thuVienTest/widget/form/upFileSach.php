<?php
echo"
<div style='width: 50%; height: 250px; margin: auto; background-color: white; padding-top: 50px'>
<form action='model/nhapSachFile.php'class='form-horizontal' id='formSach' enctype='multipart/form-data' method='POST' role='form' style='margin:0 auto;  width: 90%'>
    <div class='form-group'>
        <label for='excel' class='col-sm-2 control-label'>File Excel:</label>
        <div class='col-sm-10'>
            <input id='excel' type='file' name='file_information_book' value='chọn file excel' >
        </div>
    </div>
    <div class='form-group'>
        <label for='hinhanh' class='col-sm-2 control-label'>Hình ảnh:</label>
        <div class='col-sm-10'>
            <input id='hinhanh' type='file' name='image[]' size='141' multiple='' value='chọn file hình ảnh' >
        </div>
    </div>
    <div class='form-group'>
        <label for='tep' class='col-sm-2 control-label'>Media:</label>
        <div class='col-sm-10'>
            <input id='tep' type='file' name='media[]' size='141' multiple='' value='chọn file media' >
        </div>
    </div>
    <div class='form-group'>
        <label for='gui' class='col-sm-2 control-label'></label>
        <div class='col-sm-10'>
            <input id='gui' class='form-control' type='submit' name='upfile_information_book' value='Gửi'>
        </div>
    </div>
</form>
</div>";
?>
