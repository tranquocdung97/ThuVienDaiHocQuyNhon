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
require 'widget/panel/gio.php';
require 'widget/footer.php';
?>