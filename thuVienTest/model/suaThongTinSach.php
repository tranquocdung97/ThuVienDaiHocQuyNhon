<?php
  require 'getConnect.php';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  if(isset($_POST['thuchien']))
  {
    $idcu=$_POST['idcu'];
    if(isset($_POST['tensach']))
    {
      $tensach=$_POST['tensach'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET tensach='".$tensach."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['tentacgia']))
    {
      $tentacgia=$_POST['tentacgia'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET tentacgia='".$tentacgia."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['nhaxuatban']))
    {
      $nhaxuatban=$_POST['nhaxuatban'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET nhaxuatban='".$nhaxuatban."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['maloaisach']))
    {
      $maloaisach=$_POST['maloaisach'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET maloaisach='".$maloaisach."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['mota']))
    {
      $mota=$_POST['mota'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET mota='".$mota."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['tag']))
    {
      $tag=$_POST['tag'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET tag='".$tag."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['soluong']))
    {
      $soluong=$_POST['soluong'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET soluong='".$soluong."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(isset($_POST['giatien']))
    {
      $giatien=$_POST['giatien'];
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET giatien='".$giatien."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if($_FILES['anh']['name'] != NULL)
    {
      $temp=explode(".",$_FILES['anh']['name']);
      $extension=end($temp);
      if($extension !='jpg')
        $extension='jpg';
      $target_path="../images/";
      $name=$idcu.'.'.end($temp);
      move_uploaded_file($_FILES['anh']['tmp_name'],$target_path.$name);
      $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
      $sql="UPDATE information_book SET image='".$name."', ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
      mysqli_query($ketNoi,$sql);
    }
    if(!empty($_FILES['media']['name']) )
    {
        $temp=explode(".",$_FILES['media']['name']);
        $name=$idcu.'.'.end($temp);
        $target_path="../media/";
        array_map( "unlink", glob($target_path.$idcu.'.*') );
        move_uploaded_file($_FILES['media']['tmp_name'],$target_path.$name);
        $ngaycapnhatcuoi=date('Y/m/d - H:i:s');
        $sql="UPDATE information_book SET media='".$name."',ngaycapnhatcuoi='".$ngaycapnhatcuoi."' WHERE id='".$idcu."'";
		mysqli_query($ketNoi,$sql);
    }
    header("location: ../admin.php?act=qlsach");
  }
  else
    header("location: ../login_admin.php");
  
?>