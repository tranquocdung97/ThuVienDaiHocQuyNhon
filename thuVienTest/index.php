<?php
    require 'widget/top.php';
    if(empty($_SESSION['madn']))
        header("location:login.php");
    require 'model/getConnect.php';
    require 'widget/xoakhiquahan.php';
    require 'model/load_sach.php';
	require 'widget/header.php';
	require 'widget/menu.php';
	require 'widget/panel/phantrang.php';
    require 'widget/panel/thumbnail.php';
    require 'widget/panel/xemNhieu.php';
    require 'widget/panel/sachMoi.php';
	require 'widget/panel/khoa.php';
	require 'widget/footer.php';
	
?>