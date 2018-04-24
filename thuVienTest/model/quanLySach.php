<?php
	function hienThi($ketNoi, $keyword)
	{
	    if($keyword){
        $keyword = mb_strtolower($keyword,'UTF-8');
        $sql="select * from information_book WHERE LOWER(tensach) LIKE '%$keyword%'";
    }
    else
		$sql="select * from information_book order by maloaisach asc";
		$ketQua=mysqli_query($ketNoi,$sql);
		while($row=mysqli_fetch_array($ketQua))
		{
			echo "<tr>";
			echo "<td id='id'>".$row['id']."</td>";
			echo "<td>".$row['tensach']."</td>";
			echo "<td>".$row['tentacgia']."</td>";
			echo "<td>".$row['nhaxuatban']."</td>";
			echo "<td>".$row['maloaisach']."</td>";
			echo "<td><img src='images/".$row['image']."' style='width:128px;height:140px'></td>";
			echo "<td>".$row['tag']."</td>";
			echo "<td>".$row['soluong']."</td>";
			echo "<td>".$row['giatien']."</td>";
			echo "<td>".$row['luotxem']."</td>";
            echo "<td><button class=\"btn btn-default\ edit\">Sửa</button> </td>";
            echo "<td><button class=\"btn btn-default xoasach\">Xóa</button></td>";
			echo "</tr>";
            echo "<tr>";
            echo "<td colspan='13' align='center'>";
			$str=explode("_",$row['maloaisach']);
			if($str[0]!='ce')
				require 'widget/form/suaThongTinSach.php';
			else		
				require 'widget/form/suaThongTinCD-Ebook.php';				
            echo "</td>";
            echo "</tr>";
		}
		
	}
?>