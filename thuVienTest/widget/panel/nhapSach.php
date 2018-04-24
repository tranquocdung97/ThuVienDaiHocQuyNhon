<?php
if(!isset($_GET['fn']))
    $chucnang = 'nhapsach';
else
    $chucnang = $_GET['fn'];
?>
<a href="admin.php?act=nhapsach&fn=nhapsach" style="display: inline"><button type="button" class="btn btn-primary" id="nhapsach">Nhập sách</button></a>
<a href="admin.php?act=nhapsach&fn=nhapfile" style="display: inline"><button type="button" class="btn btn-primary" id="nhapfile">Nhập theo file</button></a>
<div class="divider"></div>
<?php
    if($chucnang == 'nhapsach')
        require 'widget/form/nhapSach.php';
    else if($chucnang == 'nhapfile')
        require 'widget/form/upFileSach.php';
?>


