<?php
	require("Classes/PHPExcel.php");
	require("model/getConnect.php");
	$objExcel=new PHPExcel;
	$objExcel->createSheet();
	$objExcel->setActiveSheetIndex(0);
	$sheet=$objExcel->getActiveSheet()->setTitle('ThongKeDaMuon');
	$rowCount1=1;
	$sheet->setCellValue('A'.$rowCount1,'ID');
	$sheet->setCellValue('B'.$rowCount1,'Đã Mượn');
	$damuon=$ketNoi->query("SELECT madn,damuon FROM information_user WHERE quyentruycap='sinhvien' OR quyentruycap='giaovien' ORDER BY damuon DESC");
	while($row=mysqli_fetch_array($damuon))
	{
		$rowCount1++;
		$sheet->setCellValue('A'.$rowCount1,$row['madn']);
		$sheet->setCellValue('B'.$rowCount1,$row['damuon']);
	}

	$objExcel->createSheet();
	$objExcel->setActiveSheetIndex(1);
	$sheet=$objExcel->getActiveSheet()->setTitle('ThongKeLuotXem');
	$rowCount2=1;
	$sheet->setCellValue('A'.$rowCount2,'ID');
	$sheet->setCellValue('B'.$rowCount2,'Tên Sách');
	$sheet->setCellValue('C'.$rowCount2,'Lượt Xem');
	$luotxem=$ketNoi->query("SELECT id,tensach,luotxem FROM information_book ORDER BY luotxem DESC");
	while($row=mysqli_fetch_array($luotxem))
	{
		$rowCount2++;
		$sheet->setCellValue('A'.$rowCount2,$row['id']);
		$sheet->setCellValue('B'.$rowCount2,$row['tensach']);
		$sheet->setCellValue('C'.$rowCount2,$row['luotxem']);
	}

	$objExcel->createSheet();
	$objExcel->setActiveSheetIndex(2);
	$sheet=$objExcel->getActiveSheet()->setTitle('ThongKeSoLuongSach');
	$rowCount3=1;
	$sheet->setCellValue('A'.$rowCount3,'ID');
	$sheet->setCellValue('B'.$rowCount3,'Tên Sách');
	$sheet->setCellValue('C'.$rowCount3,'Mã Loại Sách');
	$sheet->setCellValue('D'.$rowCount3,'Tên Tác Giả');
	$sheet->setCellValue('E'.$rowCount3,'Nhà Xuất Bản');
	$sheet->setCellValue('F'.$rowCount3,'Giá Tiền');
	$sheet->setCellValue('G'.$rowCount3,'Số lượng');
	$soluong=$ketNoi->query("SELECT id,tensach,maloaisach,tentacgia,nhaxuatban,giatien,soluong FROM information_book ORDER BY soluong ASC");
	while($row=mysqli_fetch_array($soluong))
	{
		$rowCount3++;
		$sheet->setCellValue('A'.$rowCount3,$row['id']);
		$sheet->setCellValue('B'.$rowCount3,$row['tensach']);
		$sheet->setCellValue('C'.$rowCount3,$row['maloaisach']);
		$sheet->setCellValue('D'.$rowCount3,$row['tentacgia']);
		$sheet->setCellValue('E'.$rowCount3,$row['nhaxuatban']);
		$sheet->setCellValue('F'.$rowCount3,$row['giatien']);
		$sheet->setCellValue('G'.$rowCount3,$row['soluong']);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
	$filename="thongke.xlsx";
	$objWriter->save($filename);

	header('Content-Disposition: attachment; filename="'.$filename.'"');
	header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
	header('Content-Length: '.filesize($filename));
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: must-revalidate');
	header('Pragma: no-cache');
	readfile($filename);
	return;
?>