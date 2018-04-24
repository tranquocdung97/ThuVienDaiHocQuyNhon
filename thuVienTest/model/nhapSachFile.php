<?php
	require('../Classes/PHPExcel.php');
	require 'getConnect.php';
	date_default_timezone_set('Asia/Ho_Chi_Minh');
    if(isset($_POST['upfile_information_book']))
	{
        if(!empty($_FILES['file_information_book']['name']))
        {
            $file=$_FILES['file_information_book']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objReader->setLoadSheetsOnly('Sheet1');
            $objExcel=$objReader->load($file);
            $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);
            $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
            $row=2;
            while($row<=$highestRow)
            {
                $id=$sheetData[$row]['A'];
                $tensach=$sheetData[$row]['B'];
                $tentacgia=$sheetData[$row]['C'];
                $nhaxuatban=$sheetData[$row]['D'];
                $maloaisach=$sheetData[$row]['E'];
                $image=$sheetData[$row]['F'];
                $mota=$sheetData[$row]['G'];
				$tag=$sheetData[$row]['H'];
				$soluong=$sheetData[$row]['I'];
				$giatien=$sheetData[$row]['J'];
				$ngaycapnhatdautien=date('Y/m/d - H:i:s');
				$ngaycapnhatcuoi=$ngaycapnhatdautien;
				if($id!=null)
					$sql="INSERT INTO information_book(id,tensach,tentacgia,nhaxuatban,ngaycapnhatdautien,ngaycapnhatcuoi,maloaisach,image,mota,tag,soluong,giatien) 
					VALUES('$id','$tensach','$tentacgia','$nhaxuatban','$ngaycapnhatdautien','$ngaycapnhatcuoi','$maloaisach','$image','$mota','$tag','$soluong','$giatien');";
				mysqli_query($ketNoi,$sql);
                $row++;		
            }
			if(!empty($_FILES['image']['name']))
			{
				foreach($_FILES['image']['name'] as $key=>$value){
					$temp=explode(".",$_FILES['image']['name'][$key]);
					$extension=end($temp);
					if($extension !='jpg')
						$extension='jpg';
					$target_path="../images/";
					$name=$_FILES['image']['name'][$key];
					$image=$name.".".$extension;
					move_uploaded_file($_FILES['image']['tmp_name'][$key],$target_path.$image);
				}
			}
			if(!empty($_FILES['media']['name'])){
				foreach($_FILES['media']['name'] as $key=>$value){
					$temp=explode(".",$_FILES['media']['name'][$key]);
					$extension=end($temp);
					$target_path="../media/";
					$name=$_FILES['media']['name'][$key];
					$media=$name.".".$extension;
					move_uploaded_file($_FILES['media']['tmp_name'][$key],$target_path.$media);
				}
			}
        }
		header("location: ../admin.php?act=nhapsach&fn=nhapfile");
	}
	else
		header("location: ../login_admin.php");
?>